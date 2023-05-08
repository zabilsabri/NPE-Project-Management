<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            /* return redirect()->intended('dashboard'); */
            dd('sukses');
        }

        dd('gagal');
        /* return back()->withError([ */
        /*     'email' => 'Email atau password salah', */
        /* ])->onlyInput('email'); */
    }
}
