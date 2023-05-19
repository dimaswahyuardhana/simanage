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
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Pemasukan</th>
                                        <th scope="col">Pengeluaran</th>
                                        <th scope="col">Hutang</th>
                                        <th scope="col">Tanggal Masuk</th>
                                        <th scope="col">Laba</th>
                                        {{-- <th scope="col">Detail</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $item)
                                        <tr>
                                            <th>{{ $no++ }}.</th>
                                            <td>{{ $item->total_pemasukan }}</td>
                                            <td>{{ $item->total_pengeluaran }}</td>
                                            <td>{{ $item->total_hutang }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->tanggal)->locale('id')->isoFormat('LLL') }}
                                            </td>
                                            <td>{{ $item->laba }}</td>
                                        </tr>
                                    @endforeach
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
