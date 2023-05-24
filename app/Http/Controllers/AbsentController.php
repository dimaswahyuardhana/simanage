<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landingpage.section.absensi');
    }

    public function absent(Request $request)
    {
        $user = Auth::user();
        $today = Carbon::now()->format('Y-m-d');

        // Cek apakah user sudah absen hari ini
        $absent = Absent::where('id_user', $user->id)
            ->whereDate('time_in', $today)
            ->first();

        if ($absent) {
            // Jika sudah absen, kirimkan respons dengan pesan error
            return redirect()->with('error', 'Anda sudah Absen hari ini');
        }

        // Jika belum absen, simpan data absen baru
        Absent::create([
            'id_user' => $user->id,
            'time_in' => Carbon::now(),
            'status' => $request->input('status'),
            'keterangan' => $request->input('keterangan'),
        ]);

        // Kirimkan respons dengan pesan berhasil
        return redirect('/absen')->with('success', 'Absen berhasil');

        // return response()->json(['message' => 'Absen berhasil'], 200);

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
     * @param  \App\Models\Absent  $absent
     * @return \Illuminate\Http\Response
     */
    public function show(Absent $absent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absent  $absent
     * @return \Illuminate\Http\Response
     */
    public function edit(Absent $absent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absent  $absent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absent $absent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absent  $absent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absent $absent)
    {
        //
    }
}
