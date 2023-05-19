<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Finance;
use App\Models\FinancialStatement;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

        $jumlah_uang = Finance::select('jumlah_uang')->get();

        $formatted_jumlah_uang = [];
        foreach ($jumlah_uang as $jumlah_uang) {
            $formatted_jumlah_uang[] = $this->formatMoney($jumlah_uang->jumlah_uang);
        }

        $total_pemasukan = Finance::whereHas('category', function ($query) {
            $query->where('kategori', 'pemasukan');
        })->sum('jumlah_uang');

        $total_pengeluaran = Finance::whereHas('category', function ($query) {
            $query->where('kategori', 'pengeluaran');
        })->sum('jumlah_uang');

        $total_hutang = Finance::whereHas('category', function ($query) {
            $query->where('kategori', 'hutang');
        })->sum('jumlah_uang');

        $total_uang = $total_pemasukan - $total_pengeluaran - $total_hutang;

        $formatted_total_uang = $this->formatMoney($total_uang);

        return view('admin.keuangan.view', compact('no', 'data', 'formatted_jumlah_uang', 'formatted_total_uang'));
    }

    public function formatMoney($amount)
    {
        $formattedAmount = 'Rp ' . number_format($amount, 2, ',', '.');

        return $formattedAmount;
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

        Finance::where('id_finance', $id_finance)->update($validated);

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

    public function arsipkan(Request $request)
    {
        // Mengambil data dari tabel finances
        $total_pemasukan = Finance::whereHas('category', function ($query) {
            $query->where('kategori', 'pemasukan');
        })->sum('jumlah_uang');

        $total_pengeluaran = Finance::whereHas('category', function ($query) {
            $query->where('kategori', 'pengeluaran');
        })->sum('jumlah_uang');

        $total_hutang = Finance::whereHas('category', function ($query) {
            $query->where('kategori', 'hutang');
        })->sum('jumlah_uang');

        $laba = $total_pemasukan - $total_pengeluaran - $total_hutang;

        // Memasukkan data ke dalam tabel financial_statements
        FinancialStatement::create([
            'total_pemasukan' => $total_pemasukan,
            'total_pengeluaran' => $total_pengeluaran,
            'total_hutang' => $total_hutang,
            'laba' => $laba,
            'tanggal' => now()
        ]);

        // Menghapus data yang telah diarsipkan dari tabel finances
        Finance::whereHas('category', function ($query) {
            $query->whereIn('kategori', ['pemasukan', 'pengeluaran', 'hutang']);
        })->delete();

        return redirect('/laporan')->with('success', 'Data berhasil di Arsipkan.');
    }
}
