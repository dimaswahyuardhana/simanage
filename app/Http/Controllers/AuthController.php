<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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
        $id_role = 2;
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100', 'email', 'unique:users,email'],
            'password' => ['required'],
            'id_company' => ['required', 'string', 'max:100', 'exists:companies,id_company']
        ]);

        $company = company::create([
            'id_company' => $idCompany,
            'company_name' => $request->input('company_name')
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'id_company' => $idCompany,
            'id_role'=> $id_role,
            'password' => $request['password']
        ]);

        Auth::login($user);

        return redirect('/admin');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'max:100', 'email'],
            'password' => ['required', Rules\Password::default()]
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email and Password invalid'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        //
    }
}
