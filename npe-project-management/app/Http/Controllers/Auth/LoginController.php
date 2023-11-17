<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = auth()->user();

            if ($user->isAdmin == 1) {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/user');
            }
        }
        return view('Auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember_me = $request->has('remember_me') ? true : false; 

        if (Auth::attempt($credentials, $remember_me)) {
            $request->session()->regenerate();
            $user = auth()->user();

            if ($user->isAdmin == 1) {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/user');
            }
        }

        return back()->with('loginError', 'Your email or password is incorrect!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
