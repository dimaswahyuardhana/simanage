@extends('admin.layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>LAPORAN KEUANGAN</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Laporan Keuangan</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabel Keuangan</h5>
                            <br>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr class>
                                        <th scope="col">NO</th>
                                        <th scope="col">PEMASUKAN</th>
                                        <th scope="col">PENGELUARAN</th>
                                        <th scope="col">HUTANG</th>
                                        <th scope="col">TANGGAL LAPORAN</th>
                                        <th scope="col">TOTAL PEMASUKAN</th>
                                        <th scope="col">TOTAL PENGELUARAN</th>
                                        <th scope="col">TOTAL HUTANG</th>
                                        <th scope="col">SALDO AKHIR</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>

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
