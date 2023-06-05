<?php

namespace App\Http\Controllers;

use App\Models\GajiKaryawan;
use App\Models\Jabatan;
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
        $perusahaan = Auth::user()->id_company;
        $gajiKaryawan = User::with('jabatan')
            ->where('id_role', '!=', 1)
            ->where('id_company', $perusahaan)
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
        $perusahaan = Auth::user()->id_company;
        $dataKaryawan = User::with('jabatan')
            ->with('absents')
            ->where('id_role', '!=', 1)
            ->where('id_company', $perusahaan)
            ->get();
        // dd($dataKaryawan);

        return view('admin.gaji_karyawan.add', compact('dataKaryawan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Ambil nilai nama_karyawan dari request
        $namaKaryawan = $request->input('nama_karyawan');

        // Ambil nilai gaji_karyawan dari request
        $gajiKaryawan = $request->input('gaji_karyawan');

        // Ambil nilai jumlah_hadir dari request
        $jumlahHadir = $request->input('jumlah_hadir');

        // Ambil nilai jumlah_izin dari request
        $jumlahIzin = $request->input('jumlah_izin');

        // Ambil nilai jumlah_sakit dari request
        $jumlahSakit = $request->input('jumlah_sakit');

        // Ambil nilai jumlah_alpha dari request
        $jumlahAlpha = $request->input('jumlah_alpha');

        // Ambil nilai id_user dari request
        $idUser = $request->input('id_user');

        $totalGaji = ($jumlahHadir + $jumlahIzin + $jumlahSakit - $jumlahAlpha) / ($jumlahHadir + $jumlahIzin + $jumlahSakit) * $gajiKaryawan;

        $validated = $request->validate([
            'bukti_transfer_gaji' => 'required'
        ], [
            'bukti_transfer_gaji.required' => 'Bukti Transfer Gaji harus diisi'
        ]);

        GajiKaryawan::create([
            'nama_karyawan' => $namaKaryawan,
            'total_gaji' => $totalGaji,
            'bukti_transfer_gaji' => $validated['bukti_transfer_gaji'],
            'id_user' => $idUser
        ]);

        return redirect('/gaji_karyawan')->with('success', 'Data Gaji Karyawan berhasil di Tambah');
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
