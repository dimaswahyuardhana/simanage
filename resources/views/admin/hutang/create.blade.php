@extends('admin.layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DATA HUTANG</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Data Hutang</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-14">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabel Hutang</h5>
                            <a href="{{ url('/hutang/add') }}">
                                <button type="button" class="btn btn-info">+ TAMBAH DATA</button>
                            </a>
                            <br>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr class>
                                        <th scope="col">NO</th>
                                        <th scope="col">KETERANGAN HUTANG</th>
                                        <th scope="col">JUMLAH HUTANG</th>
                                        <th scope="col">TANGGAL HUTANG</th>
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
