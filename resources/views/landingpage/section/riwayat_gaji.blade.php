@extends('landingpage.layout.index')
@section('content')

    <section class="page-section bg-light" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Data Anda</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered table-light" style="vertical-align: middle">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Gaji</th>
                            <th scope="col">Slip Gaji</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataGaji as $item)
                            <tr>
                                <th>{{ $no++ }}.</th>
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('LLL') }}</td>
                                <td>{{ $item->total_gaji }}</td>
                                <td><a href="/storage/{{ $item->bukti_transfer_gaji }}" target="_blank"
                                        class="btn btn-info"><b>Lihat Slip Gaji</b></a></td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </section>
@endsection
