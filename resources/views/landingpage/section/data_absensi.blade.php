@extends('landingpage.layout.index')
@section('content')
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading">Manajemen Data</div>
        </div>
    </header>
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Data Anda</h2>
            </div>
            <a href="">
                <button class="btn btn-dark mb-3">Cetak Slip Gaji <i class="fas fa-file-pdf fa-lg"
                        style="color: #f01939;"></i></button>
            </a>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered table-light ">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Lampiran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th>{{ $no++ }}.</th>
                                <td>{{ \Carbon\Carbon::parse($item->time_in)->locale('id')->isoFormat('LL') }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->keterangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </section>
@endsection
