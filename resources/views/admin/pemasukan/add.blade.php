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
                            <form method="POST" action="#">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name_category" class="col-sm-2 col-form-label">Sumber Pendapatan</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control"
                                            id="sumber_pendapatan" name="sumber_pendapatan">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name_category" class="col-sm-2 col-form-label">Jumlah Pemasukan</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control"
                                            id="jumlah_pemasukan" name="jumlah_pemasukan">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">TAMBAH</button>
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
