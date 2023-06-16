@extends('landingpage.layout.index')
@section('content')
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To siManage!</div>
            <div class="masthead-heading text-uppercase">memudahkan pengelolaan keuangan dan absen karyawan</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
        </div>
    </header>

    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <a href="#">
                            <i class="fas fa-address-book fa-stack-1x fa-inverse"></i>
                        </a>

                    </span>
                    <h4 class="my-3">Absen Karyawan</h4>
                    <p class="text-muted">Admin dapat mengelola data absen dan Karyawan dapat melakukan absen</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <a href="#">
                            <i class="fas fa-money-bills fa-stack-1x fa-inverse"></i>
                        </a>
                    </span>
                    <h4 class="my-3">Keuangan</h4>
                    <p class="text-muted">Mempermudah pengelolaan keuangan menjadi lebih teratur agar dapat
                        menjaga keseimbangan antara pendapatan dan pengeluaran</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <a href="#">
                            <i class="fas fa-file fa-stack-1x fa-inverse"></i>
                        </a>
                    </span>
                    <h4 class="my-3">Laporan Keuangan</h4>
                    <p class="text-muted">Membukukan data keuangan menjadi sebuah format catatan informasi keuangan suatu
                        dalam periode tertentu yang dapat digunakan untuk menggambarkan situasi
                        kinerja usaha</p>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('landing/assets/img/team/rizaldi.jpg') }}"
                            alt="..." />
                        <h4>Rizaldi Permana</h4>
                        <p class="text-muted">Mentor</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('landing/assets/img/team/dimas.jpg') }}"
                            alt="..." />
                        <h4>Dimas Wahyu Ardhana</h4>
                        <p class="text-muted">Front-end Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('landing/assets/img/team/faniel.jpg') }}"
                            alt="..." />
                        <h4>Faniel Sianipar</h4>
                        <p class="text-muted">Back-end Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('landing/assets/img/team/airell.jpeg') }}"
                            alt="..." />
                        <h4>Airell Aristo</h4>
                        <p class="text-muted">Back-end Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('landing/assets/img/team/nina.jpeg') }}"
                            alt="..." />
                        <h4>Nina Hidayah</h4>
                        <p class="text-muted">Databases Design</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="{{ asset('landing/assets/img/team/aini.jpg') }}"
                            alt="..." />
                        <h4>Nur 'Aini Azizah</h4>
                        <p class="text-muted">Databases Design</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
