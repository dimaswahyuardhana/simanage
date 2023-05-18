<?php

namespace App\Http\Controllers;

use App\Models\Expenditure;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenditures = Expenditure::all();
        $no = 1;
        return view('admin.pengeluaran.create', compact('expenditures', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengeluaran.add');
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
            'KeteranganPengeluaran' => 'required|string|max:256',
            'JumlahPengeluaran' => 'required|numeric|max:999999999999',
        ], [
            'KeteranganPengeluaran.required' => 'Keterangan Pengeluaran harus diisi',
            'JumlahPengeluaran.required' => 'Jumlah Pengeluaran harus diisi',
            'JumlahPengeluaran.numeric' => 'Jumlah Pengeluaran harus berupa angka',
            'JumlahPengeluaran.max' => 'Jumlah Pengeluaran maksimal diisi dengan 12 digit',
        ]);

        Expenditure::create($validated);
        return redirect('/pengeluaran');
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
    public function edit($id_expenditure)
    {
        $expenditure['expenditure'] = Expenditure::find($id_expenditure);
        return view('admin.pengeluaran.edit', $expenditure);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_expenditure)
    {
        $validated = $request->validate([
            'KeteranganPengeluaran' => 'required|string|max:256',
            'JumlahPengeluaran' => 'required|numeric|max:999999999999',
        ], [
            'KeteranganPengeluaran.required' => 'Keterangan Pengeluaran harus diisi',
            'JumlahPengeluaran.required' => 'Jumlah Pengeluaran harus diisi',
            'JumlahPengeluaran.numeric' => 'Jumlah Pengeluaran harus berupa angka',
            'JumlahPengeluaran.max' => 'Jumlah Pengeluaran maksimal diisi dengan 12 digit',
        ]);

        Expenditure::where('id_expenditure', $id_expenditure)->update($validated);
        return redirect('/pengeluaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_expenditure)
    {
        Expenditure::destroy(($id_expenditure));
        return redirect('/pengeluaran');
    }
}
