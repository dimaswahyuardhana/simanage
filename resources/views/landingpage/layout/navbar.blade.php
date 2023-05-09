<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('landing/assets/img/navbar-logo.svg')}}" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">MANAGEMEN DATA KARYAWAN</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">ABSENSI</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <a class="btn btn-primary" href="{{ url('/login') }}" role="button">LOGIN</a>
                </ul>
            </div>
        </div>
    </nav>
