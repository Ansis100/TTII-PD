<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    public function profile()
    {
        $user = User::where('email', Auth::user()->email)->get();
        if ($user == null) {
            return redirect()->route('register-profile');
        } else if (Auth::user()->type == 'iretajs') {
            return view('profile', ['user' => $user->first()]);
        } else {
            return view('profile', ['user' => $user->first()]);
        }
    }
}
