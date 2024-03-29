<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class KlienControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $klien = User::where('level','user')->get();
        return view('klien.index',compact('klien','nomor'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('klien.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $klien = new klien;

        $klien -> nama = $request->nama;
        $klien -> email = $request->email;
        $klien -> paket = $request->paket;
        $klien -> tgl_boking = $request->tgl_pembokingan;
        $klien -> pembokingan = $request->pembokingan;
        $klien -> pembayaran = $request->pembayaran;
        $klien -> save();

        return redirect('/klien');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $klien = klien::find($id);
        return view('klien.edit',compact('klien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $klien = klien::find($id);

        $klien -> nama = $request->nama;
        $klien -> email = $request->email;
        $klien -> paket = $request->paket;
        $klien -> tgl_boking = $request->tgl_pembokingan;
        $klien -> pembokingan = $request->pembokingan;
        $klien -> pembayaran = $request->pembayaran;
        $klien -> save();

        return redirect('/klien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $klien = User::find($id);
        $klien->delete();

        return redirect('/klien');
    }
}
