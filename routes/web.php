<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\AboutController;

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
//     return view('arsip.index');
// });

Route::get('/', [ArsipController::class, 'index']);
Route::get('/arsip/create', [ArsipController::class, 'create']);

Route::post('/arsip/store', [ArsipController::class, 'store']);
Route::delete('/arsip/{id}/hapus', [ArsipController::class, 'destroy']);
Route::get('/arsip/{id}/lihat', [ArsipController::class, 'show']);
Route::get('/about', function () {
    return view('about.index');
});
