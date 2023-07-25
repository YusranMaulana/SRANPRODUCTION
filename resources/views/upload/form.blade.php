@extends('layouts.master')
@section('judul','Tambah Data paket video')
@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Upload Now</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Upload</li>
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
        <form method="POST" action="/upload">
            @csrf
            <div class="file-input-wrapper">
              <label for="exampleInputPassword1" class="form-label"> FIle Upload</label>
              <input type="file" id="fileInput" name="namafile" class="form-control">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Harga</label>
              <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Email</label>
               <select class="form-control" name="email">
               <option>== pilih user ==</option>
                  @foreach($user as $users)
                    <option value="{{$users->id}}">{{$users->email}}</option>
                  @endforeach
               </select>
            </div>
            <button type="submit" class="btn" style="color:#c1c1c1 ; background-color:#0b363c">Upload</button>
          </form>
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

  </section>
@endsection