<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemesanan;

class PemesananController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $datapemesanan = pemesanan::all();
        return view('data pemesanan.index',compact('datapemesanan','nomor'));
    }

    public function create()
    {        
        return view('data pemesanan.form');
    }

    public function store(Request $request)
    {
       
        $datapemesanan = new pemesanan;
        $datapemesanan->nama = $request->nama;
        $datapemesanan->email = $request->email;
        $datapemesanan->alamat = $request->alamat;
        $datapemesanan->telp = $request->telp;
        $datapemesanan->tanggal = $request->tanggal;
        $datapemesanan->save();

        return redirect('/pemesanan');
    }
    
    public function destroy($id)
    {       
        $hapus = pemesanan::find($id);
        $hapus -> delete();

        return redirect()->back();
    }

    public function edit($id)
    {       
        $edit = pemesanan::find($id);

        return view('data pemesanan.edit',compact('edit'));
    }

    public function update(Request $request,$id)
    {       
        $datapemesanan =pemesanan::find($id);
        $datapemesanan->nama = $request->nama;
        $datapemesanan->email = $request->email;
        $datapemesanan->alamat = $request->alamat;
        $datapemesanan->telp = $request->telp;
        $datapemesanan->tanggal = $request->tanggal;
        $datapemesanan->update();

        return redirect('/pemesanan');

        return view('data pemesanan.edit',compact('edit'));
    }
}
