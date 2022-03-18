<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

// Route::get('/', function () {
//     return view('buku');
// });

Route::resource('buku', BukuController::class);
Route::get('/',[BukuController::class, 'index']);
Route::get('/buku/create',[BukuController::class, 'create']);
Route::post('/buku',[BukuController::class, 'store']);
Route::get('/buku/{id}/edit',[BukuController::class, 'edit']);
Route::put('/buku/{id}',[BukuController::class, 'update']);
Route::delete('/buku/{id}',[BukuController::class, 'destroy']);
Route::get('/buku/{id}/show',[BukuController::class, 'show']);


