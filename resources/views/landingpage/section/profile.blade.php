@extends('landingpage.layout.index')
@section('content')
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading">Profile</div>
        </div>
    </header>

    <section class="page-section " id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Profile</h2>
            </div>
            <center>
                <form method="POST" action="/keuangan/{{ $user->id }}">
                    @method('PUT')
                    @csrf
                    <div class="row mb-3">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                                id="keterangan" name="keterangan" value="{{ $finance->keterangan }}">
                            @error('keterangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jumlah_uang" class="col-sm-2 col-form-label">Jumlah Uang</label>
                        <div class="col-sm-10">
                            {{-- <input type="text"
                                class="form-control @error('jumlah_uang') is-invalid @enderror" id="jumlah_uang"
                                name="jumlah_uang" value="{{ $finance->jumlah_uang }}">
                            @error('jumlah_uang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror --}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-select @error('id_kategori') is-invalid @enderror"
                                aria-label="default select example" name="id_kategori">
                                {{-- <option selected>Pilih Kategori</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id_kategori }}" {{ $finance->id_kategori == $item->id_kategori ? 'selected' : '' }}>
                                        {{ $item->kategori }}
                                    </option>
                                @endforeach --}}
                            </select>
                            {{-- @error('kategori')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror --}}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-info">Simpan</button>
                            <a class="btn btn-danger" href="{{ url('/keuangan') }}">Batal</a>
                        </div>
                    </div>

                </form>
            </center>
        </div>
    </section>
@endsection
