@extends('admin.layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>PEMASUKAN</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Pemasukan</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabel Pemasukan</h5>
                            <a href="{{ url('/pemasukan/add') }}">
                                <button type="button" class="btn btn-info">+ TAMBAH DATA</button>
                            </a>
                            <br>

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr class>
                                        <th scope="col">NO.</th>
                                        <th scope="col">SUMBER PENDAPATAN</th>
                                        <th scope="col">JUMLAH PEMASUKAN</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($incomes as $item)
                                        <tr>
                                            <th>{{ $no++ }}.</th>
                                            <td>{{ $item->SumberPendapatan }}</td>
                                            <td>Rp{{ $item->JumlahPemasukan }}</td>
                                            <td>
                                                <a href="/pemasukan/{{ $item->id }}/edit"
                                                    class="btn btn-xs btn-warning">Edit</a>
                                                <a href="/pemasukan/{{ $item->id }}/delete"
                                                    class="btn btn-xs btn-danger"
                                                    onclick="return confirm('Are u Sure?');">Delete</a>
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
