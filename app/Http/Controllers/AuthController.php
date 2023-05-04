<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view('admin.auth.register');
    }

    public function login(Request $request)
    {
        return view('admin.auth.login');
    }

    public function doRegister(Request $request)
    {
        //
    }

    public function doLogin(Request $request)
    {
        //
    }

    public function logout(Request $request)
    {
        //
    }
}
