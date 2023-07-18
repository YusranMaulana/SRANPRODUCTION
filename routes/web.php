<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlienControllers;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PaketvideoController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\PemesananController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','level:user'])->group(function(){
    //manajemen klien
    // Route::get('/', function () {
    //     return view('index user.index');
    // })->middleware('auth');
    Route::get('/index', function(){return view('index user.index');});
    Route::get('/klien',[KlienControllers::class, 'index']);
    Route::get('/klien/form', [KlienControllers::class, 'create']);
    Route::post('/klien', [KlienControllers::class, 'store']);
    Route::get('/klien/edit/{id}', [KlienControllers::class, 'edit']);
    Route::put('/klien/{id}', [KlienControllers::class, 'update']);
    

    Route::get('/paket',[PaketController::class, 'index']);
    Route::get('/paket/form', [PaketController::class, 'create']);
    Route::post('/paket', [PaketController::class, 'store']);
    Route::get('/paket/edit/{id}', [PaketController::class, 'edit']);
    Route::put('/paket/{id}', [PaketController::class, 'update']);
    Route::delete('/paket/{id}', [PaketController::class, 'destroy']);

    Route::get('/paketvideo',[PaketvideoController::class, 'index']);
    Route::get('/paketvideo/form', [PaketvideoController::class, 'create']);
    Route::post('/paketvideo', [PaketvideoController::class, 'store']);
    Route::get('/paketviceo/edit/{id}', [PaketvideoController::class, 'edit']);
    Route::put('/paketvideo/{id}', [PaketvideoController::class, 'update']);
    Route::delete('/paketvideo/{id}', [PaketvideoController::class, 'destroy']);
});

Route::middleware(['auth','level:admin'])->group(function(){    
    Route::get('/', function () {
        return view('index user.index');
    })->middleware('auth');

    
    Route::get('/klien',[KlienControllers::class, 'index']);
    Route::delete('/klien/{id}', [KlienControllers::class, 'destroy']);

    Route::get('/karyawan',[KaryawanController::class, 'index']);
    Route::get('/karyawan/form',[KaryawanController::class, 'create']);
    Route::post('/karyawan', [KaryawanController::class, 'store']);
    Route::delete('/karyawan/{id}', [KaryawanController::class, 'destroy']);
    Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
    Route::put('/edit/{id}', [KaryawanController::class, 'update']);

    Route::get('/upload',[UploadController::class, 'index']);
    Route::get('/upload/form',[UploadController::class, 'create']);
    Route::post('/upload', [UploadController::class, 'store']);
    Route::delete('/upload/{id}', [UploadController::class, 'destroy']);
    Route::get('/upload/edit/{id}', [UploadController::class, 'edit']);
    Route::put('/edit/{id}', [UploadController::class, 'update']);

    Route::get('/harga',[HargaController::class, 'index']);
    Route::get('/harga/form',[HargaController::class, 'create']);
    Route::get('/harga/edit/{id}',[HargaController::class, 'edit']);
    Route::delete('/harga/{id}', [HargaController::class, 'destroy']);
    Route::post('/harga', [HargaController::class, 'store']);
    Route::put('/harga/{id}', [HargaController::class, 'update']);

    Route::get('/pemesanan',[PemesananController::class, 'index']);
    Route::get('/pemesanan/form',[PemesananController::class, 'create']);
    Route::get('/pemesanan/edit/{id}',[PemesananController::class, 'edit']);
    Route::delete('/pemesanan/{id}', [PemesananController::class, 'destroy']);
    Route::post('/pemesanan', [PemesananController::class, 'store']);
    Route::put('/pemesanan/{id}', [PemesananController::class, 'update']);
});


