<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paketvideo;

class PaketvideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $paketvideo = paketvideo::all();
        return view('paketvideo.index',compact('paketvideo','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paketvideo.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paketvideo = new Paketvideo;

        $paketvideo->nama_paket = $request->nama;
        $paketvideo->harga = $request->harga;
        $paketvideo->save();

        return redirect('/paketvideo');
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
        $paketvideo = paketvideo::find($id);
        return view('paketvideo.edit',compact('paketvideo'));
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
        $paketvideo = Paketvideo::find($id);

        $paketvideo->nama_paket = $request->nama;
        $paketvideo->harga = $request->harga;
        $paketvideo->save();

        return redirect('paketvideo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paketvideo = paketvideo::find($id);
        $paketvideo->delete();

        return redirect('/paketvideo');
    }
}
