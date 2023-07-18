@extends('layouts.master')
@section('judul','Tambah Data paket video')
@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Data paket video</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Data paket video</li>
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
        <form method="POST" action="/paket">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" >nama paket</label>
              <select name="nama" class="form-control" aria-label="Default select example">
                <option selected>Pilih Paket</option>
                <option value="1">Nikah</option>
                <option value="2">Prewedding</option>
                <option value="3">Akikah</option>
                <option value="4">7 Bulanan</option>
                <option value="5">Wisuda</option>
                <option value="6">Dokumenter</option>
                <option value="7">Iklan</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">harga</label>
              <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn" style="color:#c1c1c1 ; background-color:#0b363c">Tambah Data</button>
          </form>
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

  </section>
@endsection