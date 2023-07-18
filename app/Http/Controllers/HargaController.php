<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataharga;

class HargaController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $dataharga = dataharga::all();
        return view('dataharga.index',compact('dataharga','nomor'));
    }

    public function create()
    {
        return view('dataharga.form');
    }

    public function store(Request $request)
    {       
        $dataharga = new dataharga;
        $dataharga->nama_paket = $request->nama;
        $dataharga->harga_paket = $request->harga;
        $dataharga->save();

        return redirect('/harga');
    }

    public function edit($id)
    {
        $dataharga = dataharga::find($id);
        return view('dataharga.edit',compact('dataharga'));
    }

    public function destroy($id)
    {
        $dataharga = dataharga::find($id);
        $dataharga->delete();

        return redirect('/harga');
    }

    public function update(Request $request, $id)
    {
        $klien = dataharga::find($id);

        $klien -> nama_paket = $request->nama;
        $klien -> harga_paket = $request->harga;
        $klien -> save();

        return redirect('/harga');
    }

}
