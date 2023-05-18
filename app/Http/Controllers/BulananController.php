<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\Debt;
use App\Models\Expenditure;
use App\Models\Income;
use App\Models\Monthly;
use Illuminate\Http\Request;

class BulananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $no = 1;
        // $incomes = Income::all();
        // $expenditures = Expenditure::all();
        // $debts = Debt::all();
        $total_pemasukan = Income::sum('jumlah_pemasukan');
        $total_pengeluaran = Expenditure::sum('jumlah_pengeluaran');
        $total_hutang = Debt::sum('jumlah_hutang');
        $data = company::select('jumlah_pemasukan','jumlah_pengeluaran','jumlah_hutang')
        ->join('incomes','incomes.id_company','=','companies.id_company')
        ->join('expenditures','expenditures.id_company','=','companies.id_company')
        ->join('debts','debts.id_company','=','companies.id_company')
        ->get();

        return view('admin.bulanan.create', compact( 'data','total_pemasukan','total_pengeluaran','total_hutang'));
        // return view('admin.bulanan.create');
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
        //
    }
}
