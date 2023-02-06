@extends('layouts.master')
@section('Judul', 'klien')
@section('content-header')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data klien</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data klien</li>
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
        <a href="/klien/form" class="btn btn-primary">Tambah Data</a>

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
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nama</th>
                <th scope="col">email</th>
                <th scope="col">tanggal boking</th>
                <th scope="col">boking</th>
                <th scope="col">pembayaran</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($klien as $item)
                <tr>
                    <th scope="row">{{$nomor++}}</th>
                    <td>{{$item-> nama}}</td>
                    <td>{{$item-> email}}</td>
                    <td>{{$item-> tgl_boking}}</td>
                    <td>{{$item-> pembokingan}}</td>
                    <td>{{$item-> pembayaran}}</td>
                    <td>
                        <a href="/klien/edit/{{$item->id}}" class="btn btn-sm btn-info">edit</a>
                        <a href="/klien/hapus/{{$item->id}}" class="btn btn-sm btn-danger">hapus</a>
                    </td>
                  </tr>
                @endforeach
              
              
            </tbody>
          </table>
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->
    @endsection