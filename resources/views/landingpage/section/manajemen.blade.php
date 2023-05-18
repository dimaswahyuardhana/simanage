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
            <button class="btn btn-dark mb-3">Cetak Slip Gaji <i class="fas fa-file-pdf fa-lg" style="color: #f01939;"></i></button>
        </a>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered table-light ">
              <thead>
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col">NAMA</th>
                  <th scope="col">DEPARTEMEN</th>
                  <th scope="col">ALAMAT</th>
                  <th scope="col">NOMOR TELEPON</th>
                  <th scope="col">EMAIL</th>
                  <th scope="col">POSISI</th>
                  <th scope="col">GAJI POKOK</th>
                  <th scope="col">TUNJANGAN</th>
                  <th scope="col">BONUS</th>
                  <th scope="col">POTONGAN</th>
                  <th scope="col">GAJI BERSIH</th>
                </tr>
              </thead>
              <tbody>

              </tbody>

              <caption>
                Captions of the table
              </caption>

            </table>
          </div>
    </div>
</section>
@endsection
