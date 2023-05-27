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
                <div class="box">
                    <form method="POST" action="/profile/{{ $profile->id }}">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ $profile->name }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-info">Update</button>
                                <a class="btn btn-danger" href="{{ url('/absent') }}">Batal</a>
                            </div>
                        </div>

                    </form>

                </div>
            </center>
        </div>
    </section>
@endsection
