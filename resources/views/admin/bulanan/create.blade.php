@extends('admin.layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>LAPORAN BULANAN</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Laporan Bulanan</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabel Keuangan</h5>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr class>
                                        <th scope="col">PEMASUKAN</th>
                                        <th scope="col">PENGELUARAN</th>
                                        <th scope="col">HUTANG</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>Rp{{ $item->jumlah_pemasukan }}</td>
                                            <td>Rp{{ $item->jumlah_pengeluaran }}</td>
                                            <td>Rp{{ $item->jumlah_hutang }}</td>
                                        </tr>
                                    @endforeach
                                    <th style="text-align: center; border-top:2px solid black; border-bottom:2px solid black" colspan="3">Total</th>
                                    <tr>
                                        <td>Rp{{ $total_pemasukan }}</td>
                                        <td>Rp{{ $total_pengeluaran }}</td>
                                        <td>Rp{{ $total_hutang }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
