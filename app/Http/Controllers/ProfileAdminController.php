<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profileAdmin = User::select()
            ->join('companies', 'users.id_company', '=', 'companies.id_company')
            ->where('id', '=', auth()->user()->id)
            ->get();
        // dd($profileAdmin);

        return view('admin.profile.view', compact('profileAdmin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->input());
        $validated = $request->validate([
            'company_name' => 'required',
            // 'name' => ['required', 'string', 'max:100'],
            'email' => 'required|string|max:100|unique:email|email',
            'alamat' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ], [
            'company_name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email sudah digunakan',
            'email.email' => 'Email harus dengan format example@example.com',
            'alamat.required' => 'Mohon isi alamat melalui Cari Lokasi pada Peta di bawah',
        ]);

        company::where('id_company', auth()->user()->id_company)->update([
            'company_name' => $validated['company_name'],
            'email' => $validated['email'],
            'longitude' => $validated['longitude'],
            'latitude' => $validated['latitude']
        ]);

        User::where('id', auth()->user()->id)->update([
            'email' => $validated['email'],
            'alamat' => $validated['alamat']
        ]);

        return redirect('/profileAdmin')->with('success', 'Profile berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
