@extends('admin.layout.index')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Data</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/pemasukan') }}">Pemasukan</a></li>
                    <li class="breadcrumb-item active">Tambah Data Pemasukan</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-10">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TAMBAH DATA PEMASUKAN </h5>

                            <!-- General Form Elements -->
                            <form method="POST" action="{{ url('/pemasukan') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="SumberPendapatan" class="col-sm-2 col-form-label">Sumber Pendapatan</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('SumberPendapatan') is-invalid @enderror"
                                            id="SumberPendapatan" name="SumberPendapatan">
                                        @error('SumberPendapatan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="JumlahPemasukan" class="col-sm-2 col-form-label">Jumlah Pemasukan</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('JumlahPemasukan') is-invalid @enderror"
                                            id="JumlahPemasukan" name="JumlahPemasukan">
                                        @error('JumlahPemasukan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">TAMBAH</button>
                                        <a class="btn btn-danger" href="{{ url('/pemasukan') }}">BATAL</a>
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
