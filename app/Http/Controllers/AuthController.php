<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Login
    public function login()
    {
        return view('pages.auth.login');
    }

    // Register
    public function register()
    {
        return view('pages.auth.register');
    }

    // Forget Password
    public function forget_password()
    {
        return view('pages.auth.forget_password');
    }
}
