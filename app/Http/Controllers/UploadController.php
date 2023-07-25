<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;
use App\Models\User;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('upload.index');
        $nomor = 1;
        $upload = Upload::all();
        return view('upload.index',compact('upload','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('level','user')->get();
        return view('upload.form',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $upload = new upload;
        $upload->nama_paket = $request->namafile;
        $upload->harga = $request->harga;
        $upload->users_id = $request->email;
        $upload->save();

        return redirect('/upload');
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
        $edit = upload::find($id);

        return view('upload.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ubah(Request $request, $id)
    {
        dd($request);
        $upload = upload::find($id);
        $upload->nama_paket = $request->namafile;
        $upload->harga = $request->harga;
        $upload->update();

        return redirect('/upload');
    }

    public function destroy($id)
    {       
        $upload = upload::find($id);
        $upload -> delete();

        return redirect()->back();
    }

    
}
