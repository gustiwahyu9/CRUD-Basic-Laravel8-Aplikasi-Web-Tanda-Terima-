<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function proseslogin(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/dashboard');
        }
        return redirect('/login')->with('gagal', 'Username / Password Salah!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
