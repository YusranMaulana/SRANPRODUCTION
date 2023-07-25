@extends('layouts.master')
@section('judul', 'upload ')
@section('content-header')

    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Upload Ulang</h1>
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

        <form method="POST" action="/upload/{{$edit->id}}">
            @method('PUT')
            @csrf
              <div class="card-body">
                <div class="file-input-wrapper">
                  <input type="file" id="fileInput" name="namafile" class="file-input" value="{{$edit->nama_paket}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Harga</label>
                  <input type="text" name="harga" class="form-control" id="exampleInputPassword1" value={{$edit->harga}}>
                </div>
                <button type="submit" class="btn" style="color:#c1c1c1 ; background-color:#0b363c">Upload</button>
              </div>
          </form>
      </div>
      <!-- /.card-body -->

    </div>
    </section>
    @endsection