<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\company;
use App\Models\role;
use Faker\Provider\ar_EG\Company as Ar_EGCompany;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function indexRegisAdmin()
    {
        return view('admin.auth.register');
    }

    public function indexRegisEmployee()
    {
        return view('employee.auth.register');
    }

    public function registrasiAdmin(Request $request)
    {
        $id_role = role::select('id_role')
            ->where('roles', 'Admin')
            ->orWhere('roles', 'admin')
            ->get();
        $idCompany = Str::random(1) . uniqid();
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100', 'email', 'unique:users,email'],
            'password' => ['required'],
            'company_name' => ['required', 'string', 'max:100', 'unique:companies,company_name']
        ]);
        $company = company::create([
            'id_company' => $idCompany,
            'company_name' => $request->input('company_name')
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'id_company' => $idCompany,
            'id_role' => $id_role[0]->id_role,
            'password' => $request['password']
        ]);

        return redirect('/login');
    }

    public function registrasiEmployee(Request $request)
    {
        $id_role = role::select('id_role')
            ->where('roles', 'Employee')
            ->orWhere('roles', 'Employee')
            ->get();
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100', 'email', 'unique:users,email'],
            'password' => ['required'],
            'id_company' => ['required', 'string', 'max:100', 'exists:companies,id_company']
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'id_company' => $request['id_company'],
            'id_role' => $id_role[0]->id_role,
            'password' => $request['password']
        ]);

        return redirect('/login');
    }
}
