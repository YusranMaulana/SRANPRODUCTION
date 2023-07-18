<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $datakaryawan = Data_karyawan::all();
        return view('data karyawan.index',compact('datakaryawan','nomor'));
    }

    public function create()
    {        
        return view('data karyawan.form');
    }

    public function store(Request $request)
    {
       
        $datakaryawan = new Data_karyawan;
        $datakaryawan->nama = $request->nama;
        $datakaryawan->email = $request->email;
        $datakaryawan->alamat = $request->alamat;
        $datakaryawan->telp = $request->telp;
        $datakaryawan->tanggal = $request->tanggal;
        $datakaryawan->bagian = $request->bagian;
        $datakaryawan->honor = $request->honor;
        $datakaryawan->tunjangan_kinerja = $request->tunjangan_kinerja;
        $datakaryawan->save();

        return redirect('/karyawan');
    }
    
    public function destroy($id)
    {       
        $hapus = Data_karyawan::find($id);
        $hapus -> delete();

        return redirect()->back();
    }

    public function edit($id)
    {       
        $edit = Data_karyawan::find($id);

        return view('data karyawan.edit',compact('edit'));
    }

    public function update(Request $request,$id)
    {       
        $datakaryawan =Data_karyawan::find($id);
        $datakaryawan->nama = $request->nama;
        $datakaryawan->email = $request->email;
        $datakaryawan->alamat = $request->alamat;
        $datakaryawan->telp = $request->telp;
        $datakaryawan->tanggal = $request->tanggal;
        $datakaryawan->bagian = $request->bagian;
        $datakaryawan->honor = $request->honor;
        $datakaryawan->tunjangan_kinerja = $request->tunjangan_kinerja;
        $datakaryawan->update();

        return redirect('/karyawan');

        return view('data karyawan.edit',compact('edit'));
    }
}
