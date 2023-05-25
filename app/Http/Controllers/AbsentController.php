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
        // $data = Absent::with('user')->get();
        // $data['absent'] = new Absent(); // Inisialisasi objek Absent
        // return view('landingpage.section.absensi', $data);
        return view('landingpage.section.absensi');
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
    // public function edit($id_user)
    // {
    //     $data['users'] = User::all();
    //     $data['absent'] = Absent::where('id_user', $id_user)->first();

    //     return view('landingpage.section.absensi', $data);
    // }

    public function absent(Request $request)
    {
        $user = Auth::user();
        // $today = Carbon::now()->format('Y-m-d');

        // Cek apakah user sudah absen hari ini
        $absent = Absent::where('id_user', $user->id)
            ->where('time_in', '!=', NULL)
            ->first();

        if ($absent) {
            // dd('tidak diupdate');
            // Jika sudah absen, kirimkan respons dengan pesan error
            // return response()->with('error', 'Anda sudah Absen hari ini');
            return response()->json(['message' => 'Absen sudah Absen hari ini'], 200);
        } else {
            dd('diupdate');
            $validated = $request->validate([
                // 'time_in' => Carbon::now(),
                'status' => 'required',
                'keterangan' => 'required'
            ], [
                'status.required' => 'Status harus dipilih'
            ]);

            $validated['time_in'] = Carbon::now();

            Absent::where('id_user', $user->id)
                ->whereRaw('date(created_at) = CURRENT_DATE()')
                ->update($validated);

            // Kirimkan respons dengan pesan berhasil
            return redirect('/absen')->with('success', 'Absen berhasil');
        }

        // Jika belum absen, simpan data absen baru
        // Absent::create([
        //     'id_user' => $user->id,
        //     'time_in' => Carbon::now(),
        //     'status' => $request->input('status'),
        //     'keterangan' => $request->input('keterangan'),
        // ]);
        // dd(Auth::user()->created_at == $today);

        // $data = Absent::select('*')
        //     ->where('id_user', $user->id)->get()
        //     ->where('date(created_at) = CURRENT_DATE()');

        // dd(Carbon::parse($data[0]->created_at)->format('Y-m-d') == $today);

        // return response()->json(['message' => 'Absen berhasil'], 200);

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
