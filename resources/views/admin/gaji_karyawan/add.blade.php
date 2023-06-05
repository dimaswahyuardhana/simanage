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
                            {{-- {{ dd($dataKaryawan) }} --}}
                            <div class="card mb-3">
                                <div class="col-sm-11 mx-4 mt-4">
                                    <select class="form-select @error('id') is-invalid @enderror"
                                        aria-label="default select example" name="id" id="selectKaryawan">
                                        <option value="0" selected>Pilih Karyawan</option>
                                        @foreach ($dataKaryawan as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="card-body py-2">
                                    <p class="card-text mb-0">Nama Karyawan : <span id="namaKaryawan"></span></p>
                                    <p class="card-text mb-0">Email : <span id="emailKaryawan"></span></p>
                                    <p class="card-text mb-0">Nomor Telepon : <span id="teleponKaryawan"></span></p>
                                    <p class="card-text mb-0">Alamat : <span id="alamatKaryawan"></span></p>
                                    <p class="card-text mb-0">Jabatan : <span id="jabatanKaryawan"></span></p>
                                    <p class="card-text mb-0">Gaji : <span id="gajiKaryawan"></span></p>


                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body py-2">
                                    <p class="card-text mb-0">Jumlah Hadir : <span id="jumlahHadir"></span></p>
                                    <p class="card-text mb-0">Jumlah Izin : <span id="jumlahIzin"></span></p>
                                    <p class="card-text mb-0">Jumlah Sakit : <span id="jumlahSakit"></span></p>
                                    <p class="card-text mb-0">Jumlah Alpha : <span id="jumlahAlpha"></span></p>
                                    <p class="card-text mb-0">Jumlah Hari Kerja : </p>

                                    <br>
                                    <b>
                                        <p class="card-text mb-0">Total Gaji = (Jumlah Hadir + Jumlah Izin +
                                            Jumlah Sakit - Jumlah Alpha) / (Jumlah Hadir + Jumlah Izin + Jumlah Sakit) *
                                            Gaji Karyawan</p>
                                    </b>
                                    <br>

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

                                        nama <input name="nama_karyawan" id="namaKaryawanInput"><br>
                                        gaji <input name="gaji_karyawan" id="gajiKaryawanInput"><br>
                                        hadir <input name="jumlah_hadir" id="jumlahHadirInput"><br>
                                        izin <input name="jumlah_izin" id="jumlahIzinInput"><br>
                                        sakit <input name="jumlah_sakit" id="jumlahSakitInput"><br>
                                        alpha <input name="jumlah_alpha" id="jumlahAlphaInput"><br>
                                        id_user <input name="id_user" id="idUserInput"><br>

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
    <script>
        var dataKaryawan = {!! json_encode($dataKaryawan) !!};
        console.log(dataKaryawan)
    </script>
    <script src="{{ asset('template/assets/js/gaji_karyawan.js') }}"></script>
@endsection
