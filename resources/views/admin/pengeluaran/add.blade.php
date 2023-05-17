@extends('admin.layout.index')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Data</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/pengeluaran') }}">Pengeluaran</a></li>
                    <li class="breadcrumb-item active">Tambah Data Pengeluaran</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-10">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TAMBAH DATA PENGELUARAN</h5>

                            <!-- General Form Elements -->
                            <form method="POST" action="{{ url('/pengeluaran') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="keterangan_pengeluaran" class="col-sm-2 col-form-label">Keterangan
                                        Pengeluaran</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('keterangan_pengeluaran') is-invalid @enderror"
                                            id="keterangan_pengeluaran" name="keterangan_pengeluaran">
                                        @error('keterangan_pengeluaran')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jumlah_pengeluaran" class="col-sm-2 col-form-label">Jumlah
                                        Pengeluaran</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('jumlah_pengeluaran') is-invalid @enderror"
                                            id="jumlah_pengeluaran" name="jumlah_pengeluaran">
                                        @error('jumlah_pengeluaran')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-info">TAMBAH</button>
                                        <a class="btn btn-danger" href="{{ url('/pengeluaran') }}">BATAL</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
