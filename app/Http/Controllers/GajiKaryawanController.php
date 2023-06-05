<?php

namespace App\Http\Controllers;

use App\Models\GajiKaryawan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GajiKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $user = Auth::user()->id_company;
        $gajiKaryawan = User::with('jabatan')
            ->where('id_role', '!=', 1)
            ->where('id_company', $user)
            ->get();
        // dd($gajiKaryawan);

        return view('admin.gaji_karyawan.view', compact('no', 'gajiKaryawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();

        return view('admin.gaji_karyawan.add', compact('data'));
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
     * @param  \App\Models\GajiKaryawan  $gajiKaryawan
     * @return \Illuminate\Http\Response
     */
    public function show(GajiKaryawan $gajiKaryawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GajiKaryawan  $gajiKaryawan
     * @return \Illuminate\Http\Response
     */
    public function edit(GajiKaryawan $gajiKaryawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GajiKaryawan  $gajiKaryawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GajiKaryawan $gajiKaryawan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GajiKaryawan  $gajiKaryawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(GajiKaryawan $gajiKaryawan)
    {
        //
    }
}
