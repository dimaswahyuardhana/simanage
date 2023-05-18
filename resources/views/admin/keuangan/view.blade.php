@extends('admin.layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>KEUANGAN</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Keuangan</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabel Keuangan</h5>
                            <a href="{{ url('/keuangan/add') }}">
                                <button type="button" class="btn btn-info"><i class="fa-solid fa-plus"></i> Tambah Data</button>
                            </a>
                            <br>

                            <!-- Default Table -->
                            <table class="table" style="vertical-align: middle">
                                <thead>
                                    <tr class>
                                        <th scope="col">No.</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <th>{{ $no++ }}.</th>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>{{ $item->jumlah_uang }}</td>
                                            <td>{{ $item->category->id_kategori }}</td>
                                            <td>{{ $item->updated_at }}</td>
                                            <td>
                                                <a href="/keuangan/{{ $item->id_finance }}/edit"
                                                    class="btn btn-xs btn-warning"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="/keuangan/{{ $item->id_finance }}/delete"
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
