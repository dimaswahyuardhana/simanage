<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('/admin') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/pemasukan') }}">
          <i class="bi bi-box-arrow-in-up"></i>
          <span>PEMASUKAN</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/pengeluaran') }}">
          <i class="bi-box-arrow-down"></i>
          <span>PENGELUARAN</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/karyawan') }}">
          <i class="bi bi-newspaper"></i>
          <span>DATA KARYAWAN</span>
        </a>
      </li><!-- End Blank Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/hutang') }}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>DATA HUTANG</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/laporan') }}">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>LAPORAN KEUANGAN</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/login') }}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/register') }}">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li>
    </ul>

  </aside>

