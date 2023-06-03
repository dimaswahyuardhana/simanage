@extends('admin.layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DATA KARYAWAN</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/karyawan') }}">Data Karyawan</a></li>
                    <li class="breadcrumb-item active">Data Absen Karyawan</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card pe-0 mb-2 me-0" style="display: inline-block">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary p-0 m-0">
                            <div class="container-fluid">
                                <ul class="sidebar-nav">
                                    <li class="nav-item">
                                        {{-- {{ dd($dataKaryawan) }} --}}
                                        <a class="nav-link collapsed me-3" href="{{ route('hadir', ['id' => $dataKaryawan[0]->id]) }}">Hadir</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed me-3" href="#">Izin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed me-3" href="#">Sakit</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed me-3" href="#">Alpha</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <h6 class="card-title mb-0 pb-0">Nama Karyawan : {{ $namaKaryawan->name }}</h6>
                            <h6 class="card-title mb-0 pb-0">Jumlah Hadir : {{ $jumlahHadir }} </h6>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabel Absent Hadir</h5>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Lampiran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hadir as $item)
                                        <tr>
                                            {{-- {{ dd($item) }} --}}
                                            <th>{{ $no++ }}.</th>
                                            <td>{{ $item->time_in }}</td>
                                            <td>{{ $item->keterangan }}</td>
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
