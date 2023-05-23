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
                <form action="#" method="#" id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5 col-md-6">
                        <div class="form-group ">
                            <label class="control-label " style="color: white" for="name">
                                Name
                            </label>
                            <input class="form-control" id="name" name="name" type="text" />
                        </div>
                        <div class="form-group ">
                            <label class="control-label " style="color: white" for="date">
                                Tanggal Masuk
                            </label>
                            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY"
                                type="text" />
                        </div>
                        <div class="form-group ">
                            <label class="control-label " style="color: white" for="date1">
                                Tanggal Keluar
                            </label>
                            <input class="form-control" id="date1" name="date1" placeholder="MM/DD/YYYY"
                                type="text" />
                        </div>
                        <div class="form-group ">
                            <label class="control-label " style="color: white" for="name1">
                                Jam Masuk
                            </label>
                            <input class="form-control" id="name1" name="name1" type="time" />
                        </div>
                        <div class="form-group ">
                            <label class="control-label" style="color: white" for="name2">
                                Jam Keluar
                            </label>
                            <input class="form-control" id="name2" name="name2" type="time" />
                        </div>
                        <div class="form-group">
                            <div>
                                <button class="btn btn-primary " name="submit" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a
                                href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>

                </form>

                <div class="calendar">

                    <div class="dycalendar" id="dycalendar"></div>

                    <div class="toggle-btn">
                        <span class="circle"></span>
                    </div>
                </div>

            </center>
        </div>
    </section>
@endsection
