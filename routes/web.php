<?php

use App\Http\Controllers\GordenController;
use App\Http\Controllers\RumahController;
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

//USER GORDEN
Route::get('gorden', [GordenController::class, 'listGorden']);
Route::get('gorden/{id}', [GordenController::class, 'details']);
Route::get('gallery/gorden', [GordenController::class, 'gallery']);

//USER RUMAH
Route::get('rumah', [RumahController::class, 'listRumah']);
Route::get('rumah/{id}', [RumahController::class, 'details']);
Route::get('gallery/rumah', [RumahController::class, 'gallery']);