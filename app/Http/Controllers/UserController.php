<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Iretajs;
use App\Iziretajs;
use App\Apartment;

class UserController extends Controller
{
    public function profile(int $userID)
    {
        $allUsers = User::all();
        $user = User::where('id', $userID)->get()->first();
        if ($user->type == 'iretajs') {
            $userData = Iretajs::where('email', $user->email)->get()->first();
            return view('profile', ['user' => $user, 'data' => $userData]);
        } else if ($user->type == 'iziretajs') {
            $userData = Iziretajs::where('email', $user->email)->get()->first();
            $reviews = Apartment::select('iretajs.first_name', 'review', 'users.id as userID', 'street', 'dzivoklis.id as apartmentID')
                ->whereRaw('iziretajs_id = ' . $userData->id . ' and atsauksme.review is not null')
                ->leftJoin('atsauksme', 'atsauksme.dzivoklis_id', '=', 'dzivoklis.id')
                ->leftJoin('iretajs', 'iretajs.id', '=', 'atsauksme.iretajs_id')
                ->leftJoin('users', 'iretajs.email', '=', 'users.email')
                ->get();
            return view('profile', ['user' => $user, 'data' => $userData, 'reviews' => $reviews]);
        }
    }
}
