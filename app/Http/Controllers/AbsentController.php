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

        // Cek apakah user sudah absen hari ini
        $absent = Absent::where('id_user', $user->id)
            ->where('time_in', '!=', NULL)
            ->first();

        if ($absent) {
            dd('tidak diupdate');
            // Jika sudah absen, kirimkan respons dengan pesan error
            return response()->json(['error' => 'Anda sudah Absen hari ini']);
        } else {
            // dd('diupdate');
            $validated = $request->validate([
                'status' => 'required',
                'keterangan' => 'required'
            ], [
                'status.required' => 'Status harus dipilih'
            ]);

            $validated['time_in'] = Carbon::now();

            Absent::where('id_user', $user->id)
                ->whereRaw('date(created_at) = CURRENT_DATE()')
                ->update($validated);

            return redirect('/absen')->with('success', 'Absen berhasil');
        }

        // $data = Absent::select('*')
        //     ->where('id_user', $user->id)->get()
        //     ->where('date(created_at) = CURRENT_DATE()');

        // dd(Carbon::parse($data[0]->created_at)->format('Y-m-d') == $today);
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
