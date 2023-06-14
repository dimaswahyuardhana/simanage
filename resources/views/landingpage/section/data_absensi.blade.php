@extends('landingpage.layout.index')
@section('content')

    <section class="page-section bg-light" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Data Absensi</h2>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered table-light" style="vertical-align: middle">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Lampiran Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataAbsensi as $item)
                            <tr>
                                <th>{{ $no++ }}.</th>
                                @if ($item->status == 'Alpha')
                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('LLL') }}</td>
                                @else
                                    <td>{{ \Carbon\Carbon::parse($item->time_in)->locale('id')->isoFormat('LLL') }}</td>
                                @endif
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td><a href="/storage/{{ $item->lampiran }}" target="_blank" class="btn btn-info"><b>Lihat Lampiran Surat</b></a></td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </section>
@endsection
