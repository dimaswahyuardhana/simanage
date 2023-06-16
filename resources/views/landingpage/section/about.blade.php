@extends('landingpage.layout.index')
@section('content')
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading">ABOUT</div>
        </div>
    </header>

    <section class="page-section" id="about">
        <div class="container">
            <ul class="timeline">
                <li>
                    <div class="timeline-image" style="display: flex; justify-content: center; align-items: center;">
                        <img class="img-fluid" style="clip-path: circle(60%); margin: auto;"
                            src="landing/assets/img/msib.jpeg" alt="..." />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>16 Februari 2023</h4>
                            <h4 class="subheading">MSIB Batch 4</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Awal mula Magang dan Studi Independen Batch 4</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image" style="display: flex; justify-content: center; align-items: center;">
                        <img class="img-fluid" style="clip-path: circle(60%); margin: auto;"
                            src="landing/assets/img/gits.jpeg" alt="..." />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>16 - 17 Februari 2023</h4>
                            <h4 class="subheading">GITS Indonesia</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Onboarding Mitra GITS Indonesia : menjelaskan latar belakang, profil dan
                                bergerak di bidang apa perusahaan mitra.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image" style="display: flex; justify-content: center; align-items: center;">
                        <img class="img-fluid" style="clip-path: circle(50%); margin: auto;"
                            src="landing/assets/img/study.jpeg" alt="..." />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>16 Februari - 30 Juni 2023</h4>
                            <h4 class="subheading">Study</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Belajar Laravel. Mempelajari banyak hal mengenai seluk beluk laravel
                                dengan banyak materi yang menarik. Bukan hanya teori tetapi diajarkan juga cara bekerja sama
                                dalam bentuk tim dan dilatih kemampuan komunikasi dengan baik.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image" style="display: flex; justify-content: center; align-items: center;">
                        <img class="img-fluid" style="clip-path: circle(50%); margin: auto;"
                            src="landing/assets/img/tim.jpeg" alt="..." />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>05 April 2023</h4>
                            <h4 class="subheading">Tim Gajah</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Pertemuan pertama Tim kami yaitu Dimas, Nina, Aini, Airel dan Faniel.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            This is
                            <br />
                            Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul </div>
    </section>
@endsection
