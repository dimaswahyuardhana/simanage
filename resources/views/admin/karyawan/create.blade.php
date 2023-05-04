@extends('admin.layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DATA KARYAWAN</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Data Karyawan</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabel Karyawan</h5>
                            <a href="{{ url('/karyawan/add') }}">
                                <button type="button" class="btn btn-info">+ TAMBAH DATA</button>
                            </a>
                            <br>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr class>
                                        <th scope="col">NO</th>
                                        <th scope="col">NAMA KARYAWAN</th>
                                        <th scope="col">DEPARTEMEN</th>
                                        <th scope="col">ALAMAT</th>
                                        <th scope="col">NOMOR TELEPHONE</th>
                                        <th scope="col">EMAIL</th>
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
