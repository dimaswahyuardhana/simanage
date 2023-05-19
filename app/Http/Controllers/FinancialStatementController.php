<?php

namespace App\Http\Controllers;

use App\Models\FinancialStatement;
use Illuminate\Http\Request;

class FinancialStatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $data = FinancialStatement::all();

        return view('admin.laporan.view', compact('no', 'data'));
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
     * @param  \App\Models\FinancialStatement  $financialStatement
     * @return \Illuminate\Http\Response
     */
    public function show(FinancialStatement $financialStatement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FinancialStatement  $financialStatement
     * @return \Illuminate\Http\Response
     */
    public function edit(FinancialStatement $financialStatement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FinancialStatement  $financialStatement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FinancialStatement $financialStatement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinancialStatement  $financialStatement
     * @return \Illuminate\Http\Response
     */
    public function destroy(FinancialStatement $financialStatement)
    {
        //
    }
}