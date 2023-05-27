@extends('landingpage.layout.index')
@section('content')
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading">Absen</div>
        </div>
    </header>

    <section class="page-section " id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">ABSEN</h2>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <center>
                <div class="box">
                    <div class="container_calendar">

                        <div class="dycalendar" id="dycalendar"></div>

                        <div class="mt-5">
                            <form method="POST" action="{{ route('absent') }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <label>
                                    <input type="radio" name="status" value="hadir">
                                    Hadir
                                </label>
                                <label>
                                    <input type="radio" name="status" value="izin">
                                    Izin
                                </label>
                                <label>
                                    <input type="radio" name="status" value="sakit">
                                    Sakit
                                </label><br>
                                <label>
                                    Keterangan
                                    <textarea name="keterangan"></textarea>
                                </label>
                                <button class="btn btn-info mt-3">Submit</button>
                                {{-- <button id="submitBtn" class="btn btn-info mt-3">Submit</button> --}}
                            </form>

                        </div>

                        <div class="toggle-btn">
                            <span class="circle"></span>
                        </div>

                    </div>

                    {{-- Calendar Script --}}
                    <script src="https://cdn.jsdelivr.net/npm/dycalendarjs@1.2.1/js/dycalendar.js"></script>
                    <script src="{{ asset('landing/js/scripts_calendar.js') }}"></script>
                </div>

            </center>
        </div>
    </section>
@endsection
