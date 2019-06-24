<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Iretajs;
use App\Iziretajs;
use App\Atsauksme;
use App\Apartment;

class UserController extends Controller
{
    public function profile()
    {
        $user = User::where('email', Auth::user()->email)->get()->first();
        if ($user->type == 'iretajs') {
            $userData = Iretajs::where('email', $user->email)->get()->first();
        } else if ($user->type == 'iziretajs') {
            $userData = Iziretajs::where('email', $user->email)->get()->first();
            $reviews = Atsauksme::where('dzivoklis_id', '=', $userData->id)->get();
            return $reviews;
        }
        return view('profile', ['user' => $user, 'data' => $userData]);
    }
}
