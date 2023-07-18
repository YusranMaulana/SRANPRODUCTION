@extends('layouts.master')
@section('judul', 'data klien')
@section('content-header')

    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>karyawan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
@endsection
@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>

      <div class="card-body">

        <form method="POST" action="/karyawan">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" >Nama</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Email</label>
              <input type="text" name="email" class="form-control" id="exampleInputPassword1"  placeholder="Email" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="exampleInputPassword1"  placeholder="Alamat" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Telepon</label>
              <input type="number" name="telp" class="form-control" id="exampleInputPassword1"  placeholder="Telepon" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Tanggal</label>
              <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1" placeholder="Tanggal" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Bagian</label>
              <input type="text" name="bagian" class="form-control" id="exampleInputPassword1" placeholder="Bagian" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Honor</label>
              <input type="text" name="honor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Honor" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tunjangan Kinerja</label>
              <input type="text" name="tunjangan_kinerja" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tunjangan Kinerja" required>
            </div>
            
            <button type="submit" class="btn" style="color:#c1c1c1 ; background-color:#0b363c">Tambah Data</button>
          </form>
      </div>
      <!-- /.card-body -->

    </div>
    </section>
    @endsection
     <script>
            function validateForm() {
    var name = document.getElementById("nama").value;
    var warning = document.getElementById("nama-warning");

    if (name === "") {
        warning.style.display = "block";
        return false;
    } else {
        warning.style.display = "none";
        return true;
    }
}

        </script>