<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use Illuminate\Http\Request;

class HutangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $debts = Debt::all();
        $no = 1;
        return view('admin.hutang.create', compact('debts', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hutang.add');
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
            'keterangan_hutang' => 'required|string|max:256',
            'jumlah_hutang' => 'required|numeric|max:999999999999',
        ], [
            'keterangan_hutang.required' => 'Keterangan Hutang harus diisi',
            'jumlah_hutang.required' => 'Jumlah Hutang harus diisi',
            'jumlah_hutang.numeric' => 'Jumlah Hutang harus berupa angka',
            'jumlah_hutang.max' => 'Jumlah Hutang maksimal diisi dengan 12 digit',
        ]);

        Debt::create($validated);
        return redirect('/hutang');
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
    public function edit($id_debt)
    {
        $debt['debt'] = Debt::find($id_debt);
        return view('admin.hutang.edit', $debt);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_debt)
    {
        $validated = $request->validate([
            'keterangan_hutang' => 'required|string|max:256',
            'jumlah_hutang' => 'required|numeric|max:999999999999',
        ], [
            'keterangan_hutang.required' => 'Keterangan Hutang harus diisi',
            'jumlah_hutang.required' => 'Jumlah Hutang harus diisi',
            'jumlah_hutang.numeric' => 'Jumlah Hutang harus berupa angka',
            'jumlah_hutang.max' => 'Jumlah Hutang maksimal diisi dengan 12 digit',
        ]);

        Debt::where('id_debt', $id_debt)->update($validated);
        return redirect('/hutang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_debt)
    {
        Debt::destroy(($id_debt));
        return redirect('/hutang');
    }
}
