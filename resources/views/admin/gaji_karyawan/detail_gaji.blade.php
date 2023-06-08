@extends('admin.layout.index')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>DETAIL GAJI KARYAWAN</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/gaji_karyawan') }}">Data Gaji Karyawan</a></li>
                    <li class="breadcrumb-item active">Detail Gaji Karyawan</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Detail Gaji Karyawan</h5>
                            <h5>{{ $detail_gaji[0]->nama_karyawan }}</h5>

                            <!-- Default Table -->
                            <table class="table" style="vertical-align: middle">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Total Gaji</th>
                                        <th scope="col">Slip Gaji</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detail_gaji as $item)
                                        <tr>
                                            <th>{{ $no++ }}.</th>
                                            <td>{{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('LLL') }}
                                            <td>{{ $item->total_gaji }}</td>
                                            <td><a
                                                    href="/storage/{{ $item->bukti_transfer_gaji }}">{{ $item->bukti_transfer_gaji }}</a>
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
