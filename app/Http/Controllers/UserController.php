<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    public function profile()
    {
        if (Auth::user()->type == 'iretajs') {
            $user = User::where('email', Auth::user()->email)->get();
            return view('profile', ['user' => $user->first()]);
        } else {
            $user = User::where('email', Auth::user()->email)->get();
            return view('profile', ['user' => $user->first()]);
        }
    }
}
