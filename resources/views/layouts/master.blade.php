<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('judul')</title>

  {{-- Google Font: Source Sans Pro --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  {{-- Font Awesome  --}}
  <link rel="stylesheet" href="{{ asset('../../plugins/fontawesome-free/css/all.min.css')}}">
  {{-- Theme style  --}}
  <link rel="stylesheet" href="{{ asset('../../dist/css/adminlte.min.css')}}">
  {{-- link bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4" style=" background-color:#0b363c" >
    <!-- Brand Logo -->
    <a href="https://www.instagram.com/s__r__a__n__/" class="brand-link" style="color:#c1c1c1">
      <img src="../../dist/img/logo 2023 .png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="color:#c1c1c1"><h6>SRAN PRODUCTION</h6></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/pp.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="https://www.instagram.com/yusranmlna/" class="d-block" style="color:#c1c1c1">yusran maulana</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw" style="color:#c1c1c1"></i>
            </button>
          </div>
        </div>
      </div>

      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column"  data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          @if(auth()->user()->level=="admin")
        
          {{-- admin --}}
          <li class="nav-item" >
            <a href="/klien" class="nav-link" style="color:#c1c1c1">
              <i class="nav-icon fas fa-users" style="color:#c1c1c1"></i>
              <p >
                Data klien
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/karyawan" class="nav-link" style="color:#c1c1c1">
              <i class="nav-icon fas fa-user-tie" style="color:#c1c1c1"></i>
              <p>
                Data karyawan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/harga" class="nav-link" style="color:#c1c1c1">
            <i class="nav-solid fas fa-credit-card" style="margin-left: 6px; margin-right: 6px ; color:#c1c1c1"></i>
              <p>
                Data Harga
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pemesanan" class="nav-link" style="color:#c1c1c1">
            <i class="nav-solid fas fa-envelope" style="margin-left: 6px; margin-right: 6px ; color:#c1c1c1"></i>
              <p>
                Data Pemesanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/upload" class="nav-link" style="color:#c1c1c1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <i class="nav-solid fas fa-upload" style="margin-left: 7px; margin-right: 7px ; color:#c1c1c1"></i>
              <p>
                Upload
              </p>
            </a>
          </li>
          
          @elseif(auth()->user()->level=="user")
          {{-- user --}}
           <li class="nav-item">
            <a href="/paket" class="nav-link" style="color:#c1c1c1">
              <i class="nav-icon fas fa-camera" style="color:#c1c1c1"></i>
              <p>
                Paket photo
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/paketvideo" class="nav-link" style="color:#c1c1c1">
              <i class="nav-icon fas fa-video" style="color:#c1c1c1"></i>
              <p>
                Paket video
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/deatline" class="nav-link" style="color:#c1c1c1">
              <i class="nav-solid fas fa-hourglass-start" style="margin-left: 8px; margin-right: 8px; color:#c1c1c1" ></i>
              <p>
                Deatline
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/myalbum" class="nav-link" style="color:#c1c1c1">
              <i class="nav-regular fas fa-file-image" style="margin-left: 8px; margin-right: 8px; color:#c1c1c1" ></i>
              <p>
                My Album
              </p>
            </a>
          </li>
            @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    @yield('content-header')
      
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>SRAN PRODUCTION &copy; 2023-2024 <a href="https://www.pexels.com/id-id/@sran-production-340355725/">Album</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('../../plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('../../plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('../../dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('../../dist/js/demo.js')}}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>