<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Models\User;

class UsersController extends Controller
{
    public function profile(Request $request) {
        if(!Auth::check()) {
            return redirect('/login');
        }
        $user = Auth::user();
        return view('users.profile', compact('user'));
    }

    public function login() {
        if(Auth::check()) {
            return redirect('/profile');
        }
        return view('users.login');
    }

    public function signup() {
        if(Auth::check()) {
            return redirect('/profile');
        }
        return view('users.signup');
    }

    public function register() {
        if(Auth::check()) {
            return redirect('/profile');
        }
        if(strcmp(request('password'), request('rep_password'))) {
            return view('/signup');
        }
        if(!empty(User::findByUsername(request('username')))) {
            return view('/signup');
        }
        if(!empty(User::findByEmail(request('email')))) {
            return view('/signup');
        }
        $user = User::create([
            'name' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        Auth::login($user);
        if(request('remember')) {
            Auth::guard()->login($user, true);
        }

        return redirect('/profile');
    }
}
