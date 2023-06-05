@extends('admin.layout.index')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Data Gaji Karyawan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/gaji_karyawan') }}">Data Gaji Karyawan</a></li>
                    <li class="breadcrumb-item active">Tambah Data Gaji Karyawan</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-10">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Data Gaji Karyawan</h5>

                            <div class="card mb-3">
                                <div class="col-sm-11 mx-4 mt-4">
                                    <select class="form-select @error('id_kategori') is-invalid @enderror"
                                        aria-label="default select example" name="id_kategori">
                                        <option selected>Pilih Karyawan</option>
                                        {{-- @foreach ($categories as $item)
                                                <option value="{{ $item->id_kategori }}">{{ $item->kategori }}</option>
                                            @endforeach --}}
                                    </select>
                                    {{-- @error('kategori')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}
                                </div>
                                <div class="card-body py-2">
                                    <p class="card-text mb-0 pb-0">Nama Karyawan : </p>
                                    <p class="card-text mb-0 pb-0">Email : </p>
                                    <p class="card-text mb-0 pb-0">Nomor Telepon : </p>
                                    <p class="card-text mb-0 pb-0">Alamat : </p>
                                    <p class="card-text mb-0 pb-0">Jabatan : </p>
                                    <p class="card-text mb-0 pb-0">Gaji : </p>

                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body py-2">
                                    <p class="card-text mb-0 pb-0">Jumlah Hadir : </p>
                                    <p class="card-text mb-0 pb-0">Jumlah Izin : </p>
                                    <p class="card-text mb-0 pb-0">Jumlah Sakit : </p>
                                    <p class="card-text mb-0 pb-0">Jumlah Alpha : </p>
                                    <p class="card-text mb-0 pb-0">Jumlah Hari Kerja : </p>

                                    <!-- General Form Elements -->
                                    <form method="POST" action="{{ url('/gaji_karyawan') }}">
                                        @csrf
                                        <div class="row mb-3 me-2">
                                            <label for="bukti_transfer_gaji" class="col-sm-3 col-form-label">Bukti Transfer
                                                Gaji</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="file" name="bukti_transfer_gaji"
                                                    id="bukti_transfer_gaji">
                                                @error('bukti_transfer_gaji')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-info">Tambah</button>
                                                <a class="btn btn-danger" href="{{ url('/gaji_karyawan') }}">Batal</a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
