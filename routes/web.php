<?php

use App\Http\Controllers\ChopperController;
use App\Http\Controllers\DesainController;
use App\Http\Controllers\GordenController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\WeddingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ADMIN GORDEN
Route::get('/admin/gorden', [GordenController::class, 'index']);
Route::get('/admin/gorden/create', [GordenController::class, 'create']);
Route::post('/admin/gorden/store', [GordenController::class, 'store']);

//ADMIN RUMAH
Route::get('/admin/rumah', [RumahController::class, 'index']);
Route::get('/admin/rumah/create', [RumahController::class, 'create']);
Route::post('/admin/rumah/store', [RumahController::class, 'store']);

//ADMIN WEDDING ORGANIZER
Route::get('/admin/wedding', [WeddingController::class, 'index']);
Route::get('/admin/wedding/create', [WeddingController::class, 'create']);
Route::post('/admin/wedding/store', [WeddingController::class, 'store']);

//ADMIN CHOPPER
Route::get('/admin/chopper', [ChopperController::class, 'index']);
Route::get('/admin/chopper/create', [ChopperController::class, 'create']);
Route::post('/admin/chopper/store', [ChopperController::class, 'store']);

//ADMIN DESAIN
Route::get('/admin/desain', [DesainController::class, 'index']);
Route::get('/admin/desain/create', [DesainController::class, 'create']);
Route::post('/admin/desain/store', [DesainController::class, 'store']);

//USER GORDEN
Route::get('gorden', [GordenController::class, 'listGorden']);
Route::get('gorden/{id}', [GordenController::class, 'details']);
Route::get('gallery/gorden', [GordenController::class, 'gallery']);

//USER RUMAH
Route::get('rumah', [RumahController::class, 'listRumah']);
Route::get('rumah/{id}', [RumahController::class, 'details']);
Route::get('gallery/rumah', [RumahController::class, 'gallery']);

//USER WEDDING ORGANIZER
Route::get('wedding', [WeddingController::class, 'listWedding']);
Route::get('wedding/{id}', [WeddingController::class, 'details']);
Route::get('gallery/wedding', [WeddingController::class, 'gallery']);

//USER CHOPPER
Route::get('chopper', [ChopperController::class, 'listChopper']);
Route::get('chopper/{id}', [ChopperController::class, 'details']);
Route::get('gallery/chopper', [ChopperController::class, 'gallery']);

//USER DESAIN RUMAH
Route::get('desain', [DesainController::class, 'listDesain']);
Route::get('desain/{id}', [DesainController::class, 'details']);
Route::get('gallery/desain', [DesainController::class, 'gallery']);