@extends('layouts.master')
@section('Judul', 'paket video ')
@section('content-header')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data paket video</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data paket video</li>
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
        <a href="/paketvideo/form" class="btn" style="color:#c1c1c1 ; background-color:#0b363c">Tambah Data</a>

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
                <th scope="col">nama paket</th>
                <th scope="col">harga</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($paketvideo as $item)
                <tr>
                    <th scope="row">{{$nomor++}}</th>
                    <td>{{$item->nama_paket}}</td>
                    <td>{{$item->harga}}</td>        
                    <td>
                        <a href="/paketvideo/edit/{{$item->id}}" class="btn btn-sm btn-info">edit</a>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-default{{$item->id}}">
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
                                <p>Yakin data paket {{$item->paket}} ingin dihapus?</p>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <form action="/paketvideo/{{$item->id}}" method="POST">
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