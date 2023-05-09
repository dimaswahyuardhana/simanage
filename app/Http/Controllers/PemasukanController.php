<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes = Income::all();
        $no = 1;
        return view('admin.pemasukan.create', compact('incomes', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pemasukan.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'SumberPendapatan' => 'required|string|max:256',
            'JumlahPemasukan' => 'required|numeric|max:999999999999',
        ], [
            'SumberPendapatan.required' => 'Sumber Pendapatan harus diisi',
            'JumlahPemasukan.required' => 'Jumlah Pemasukan harus diisi',
            'JumlahPemasukan.numeric' => 'Jumlah Pemasukan harus berupa angka',
            'JumlahPemasukan.max' => 'Jumlah Pemasukan maksimal diisi dengan 12 digit',
        ]);

        Income::create($validated);
        return redirect('/pemasukan');
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
        $income['income'] = Income::find($id);
        return view('admin.pemasukan.edit', $income);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Income::destroy(($id));
        return redirect('/pemasukan');
    }
}
