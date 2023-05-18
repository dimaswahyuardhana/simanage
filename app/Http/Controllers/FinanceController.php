<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $data = Finance::with('category')->get();

        return view('admin.keuangan.view', compact('no', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::all();

        return view('admin.keuangan.add', $data);
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
            'keterangan' => 'required',
            'jumlah_uang' => 'required|numeric',
            'id_kategori' => 'required'
        ], [
            'keterangan.required' => 'Keterangan harus diisi',
            'jumlah_uang.required' => 'Jumlah Uang harus diisi',
            'jumlah_uang.numeric' => 'Jumlah Uang harus berupa angka',
            'id_kategori.required' => 'Kategori harus diisi',
        ]);

        Finance::create($validated);

        return redirect('/keuangan')->with('success', 'Data berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function show(Finance $finance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function edit($id_finance)
    {
        $data['categories'] = Category::all();
        $data['finance'] = Finance::find($id_finance);

        return view('admin.keuangan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_finance)
    {
        $validated = $request->validate([
            'keterangan' => 'required',
            'jumlah_uang' => 'required|numeric',
            'id_kategori' => 'required'
        ], [
            'keterangan.required' => 'Keterangan harus diisi',
            'jumlah_uang.required' => 'Jumlah Uang harus diisi',
            'jumlah_uang.numeric' => 'Jumlah Uang harus berupa angka',
            'id_kategori.required' => 'Kategori harus diisi',
        ]);

        Finance::where('id_finance', $id_finance)->update([$validated]);

        return redirect('/keuangan')->with('success', 'Data berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_finance)
    {
        Finance::destroy($id_finance);
        return redirect('/keuangan')->with('success', 'Data berhasil di Hapus');
    }
}
