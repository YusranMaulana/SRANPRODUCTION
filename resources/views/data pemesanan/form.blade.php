@extends('layouts.master')
@section('judul', 'data Pemesanan')
@section('content-header')

    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Pemesanan</h1>
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

        <form method="POST" action="/pemesanan">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">email</label>
              <input type="text" name="email" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">alamat</label>
              <input type="text" name="alamat" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">telp</label>
              <input type="number" name="telp" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">tanggal boking</label>
              <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn" style="color:#c1c1c1 ; background-color:#0b363c">Keep Data</button>
          </form>
      </div>
      <!-- /.card-body -->

    </div>
    </section>
    @endsection