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
                                <button type="button" class="btn btn-info"><i class="fa-solid fa-plus"></i> TAMBAH
                                    DATA</button>
                            </a>
                            <br>

                            <!-- Default Table -->
                            <table class="table" style="vertical-align: middle">
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
                                            <td>{{ $item->sumber_pemasukan }}</td>
                                            <td>Rp{{ $item->jumlah_pemasukan }}</td>
                                            <td>
                                                <a href="/pemasukan/{{ $item->id_income }}/edit"
                                                    class="btn btn-xs btn-warning"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="/pemasukan/{{ $item->id_income }}/delete"
                                                    class="btn btn-xs btn-danger"
                                                    onclick="return confirm('Are u Sure?');"><i class="fa fa-trash"></i></a>
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
