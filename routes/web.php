                                                                                                                    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlienControllers;
use App\Http\Controllers\PaketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')-> group (function(){
    //manajemen klien
    Route::get('/klien',[KlienControllers::class, 'index']);
    Route::get('/klien/form', [KlienControllers::class, 'create']);
    Route::post('/klien', [KlienControllers::class, 'store']);
    Route::get('/klien/edit/{id}', [KlienControllers::class, 'edit']);
    Route::put('/klien/{id}', [KlienControllers::class, 'update']);
    Route::delete('/klien/{id}', [KlienControllers::class, 'destroy']);

    Route::get('/paket',[PaketController::class, 'index']);
    Route::get('/paket/form', [PaketController::class, 'create']);
    Route::post('/paket', [PaketController::class, 'store']);
    Route::get('/paket/edit/{id}', [PaketController::class, 'edit']);
    Route::put('/paket/{id}', [PaketController::class, 'update']);
    Route::delete('/paket/{id}', [PaketController::class, 'destroy']);
});
