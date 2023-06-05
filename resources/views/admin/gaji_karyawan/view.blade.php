@extends('admin.layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DATA GAJI KARYAWAN</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Data Gaji Karyawan</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabel Gaji Karyawan</h5>
                            <div>
                                <a href="{{ url('/gaji_karyawan/add') }}">
                                    <button type="button" class="btn btn-info">
                                        <i class="fa-solid fa-plus"></i> Tambah Data
                                    </button>
                                </a>
                            </div>
                            <br>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Karyawan</th>
                                        <th scope="col">Total Gaji</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gajiKaryawan as $item)
                                        <tr>
                                            <th>{{ $no++ }}.</th>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->jabatan->gaji }}</td>
                                            <td><a href="{{ route('detail_gaji_karyawan', ['id' => $item->id]) }}"
                                                    class="btn btn-xs btn-info"><i class="bi bi-info-circle-fill"></i></a>
                                            </td>
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
