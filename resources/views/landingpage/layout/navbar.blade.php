<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('landing/assets/img/navbar-logo.svg') }}"
                    alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

                    @if (auth()->check())
                        @php $admin = auth()->user()->id_role @endphp
                        {{-- {{  dd($admin) }} --}}
                        @if ($admin == 1)
                            <script>
                                window.location.href = '{{ url('/admin') }}';
                            </script>
                        @endif

                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">ABOUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/absent') }}">ABSENSI</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/data_absensi') }}">DATA ABSENSI</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/riwayat_gaji') }}">RIWAYAT GAJI</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/profile') }}">PROFILE</a></li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-primary">LOGOUT</button>
                        </form>
                    @else
                        <a class="btn btn-primary" href="{{ url('/login') }}" role="a">LOGIN</a>
                    @endif

                    {{-- @if (auth()->check())
                    @else
                    @endif --}}
                </ul>
            </div>
        </div>
    </nav>
