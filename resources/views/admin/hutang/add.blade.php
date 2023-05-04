@extends('admin.layout.index')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Data</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/hutang') }}">Hutang</a></li>
                    <li class="breadcrumb-item active">Tambah Data Hutang</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-10">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">TAMBAH DATA HUTANG </h5>

                            <!-- General Form Elements -->
                            <form method="POST" action="#">
                                @csrf
                                <div class="row mb-3">
                                    <label for="keterangan_hutang" class="col-sm-2 col-form-label">Keterangan Hutang</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control"
                                            id="keterangan_hutang" name="keterangan_hutang">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jumlah_hutang" class="col-sm-2 col-form-label">Jumlah Hutang</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control"
                                            id="jumlah_hutang" name="jumlah_hutang">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Hutang</label>
                                    <div class="col-sm-10">
                                        <input type="date"
                                            class="form-control"
                                            id="tanggal" name="tanggal">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-info">TAMBAH</button>
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
