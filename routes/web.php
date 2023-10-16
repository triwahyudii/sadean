<?php

use App\Http\Controllers\GordenController;
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

//ADMIN
Route::get('/admin/gorden', [GordenController::class, 'index']);
Route::get('/admin/gorden/create', [GordenController::class, 'create']);
Route::post('/admin/gorden/store', [GordenController::class, 'store']);

//USER
Route::get('gorden', [GordenController::class, 'listGorden']);
Route::get('gorden/{id}', [GordenController::class, 'details']);
Route::get('gallery/gorden', [GordenController::class, 'gallery']);