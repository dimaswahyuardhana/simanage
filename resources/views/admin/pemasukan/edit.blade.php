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
                            <form method="POST" action="/pemasukan/{{ $income->id_income }}">
                                @method('PUT')
                                @csrf
                                <div class="row mb-3">
                                    <label for="sumber_pemasukan" class="col-sm-2 col-form-label">Sumber Pendapatan</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('sumber_pemasukan') is-invalid @enderror"
                                            id="sumber_pemasukan" name="sumber_pemasukan" value="{{ $income->sumber_pemasukan }}">
                                        @error('sumber_pemasukan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jumlah_pemasukan" class="col-sm-2 col-form-label">Jumlah Pemasukan</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('jumlah_pemasukan') is-invalid @enderror"
                                            id="jumlah_pemasukan" name="jumlah_pemasukan" value="{{ $income->jumlah_pemasukan }}">
                                        @error('jumlah_pemasukan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-info">UBAH</button>
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
