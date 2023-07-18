@extends('layouts.master')
@section('Judul', 'pemesanan')
@section('content-header')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data pemesananan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data pemesanan</li>
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
        <a href="/pemesanan/form" class="btn" style="color:#c1c1c1 ; background-color:#0b363c">Pesan</a>

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
                <th scope="col">alamat</th>
                <th scope="col">telp</th>
                <th scope="col">tanggal</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($datapemesanan as $item)
                <tr>
                    <th scope="row">{{$nomor++}}</th>
                    <td>{{$item-> nama}}</td>
                    <td>{{$item-> email}}</td>
                    <td>{{$item-> alamat}}</td>
                    <td>{{$item-> telp}}</td>
                    <td>{{$item-> tanggal}}</td>
                    <td>
                        {{-- edit --}}
                        <a href="/pemesanan/edit/{{$item->id}}" class="btn" style="color:#009da5 ; background-color:#0b363c">Edit</a>

                        {{-- hapus --}}
                        <button type="button" class="btn" style="color:#ff0000 ; background-color:#0b363c" data-toggle="modal" data-target="#modal-default{{$item->id}}">
                          hapus
                        </button>
                        <div class="modal fade" id="modal-default{{$item->id}}">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Peringatan!</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>Yakin data pesanan {{$item->nama}} ingin dihapus?</p>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <form action="/pemesanan/{{$item->id}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button type="submit" class="btn" style="color:#c1c1c1 ; background-color:#0b363c">Hapus</button>
                                </form>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
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