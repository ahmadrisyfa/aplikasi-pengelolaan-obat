<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/dashboard');;
});
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'loginAction']);
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/register', [App\Http\Controllers\AuthController::class, 'registerAction'])->middleware('guest');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout']);



Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

    Route::get('/jenis_obat', [App\Http\Controllers\JenisObatController::class, 'index']);
    Route::get('/jenis_obat/read', [App\Http\Controllers\JenisObatController::class, 'read']);
    Route::get('/jenis_obat/create', [App\Http\Controllers\JenisObatController::class, 'create']);
    Route::get('/jenis_obat/store', [App\Http\Controllers\JenisObatController::class, 'store']);
    Route::get('/jenis_obat/{id}', [App\Http\Controllers\JenisObatController::class, 'edit']);
    Route::get('/jenis_obat/update/{id}', [App\Http\Controllers\JenisObatController::class, 'update']);
    Route::get('/jenis_obat/destroy/{id}', [App\Http\Controllers\JenisObatController::class, 'destroy']);


    Route::get('/obat', [App\Http\Controllers\ObatController::class, 'index']);
    Route::get('/obat/read', [App\Http\Controllers\ObatController::class, 'read']);
    Route::get('/obat/create', [App\Http\Controllers\ObatController::class, 'create']);
    Route::get('/obat/store', [App\Http\Controllers\ObatController::class, 'store']);
    Route::get('/obat/{id}', [App\Http\Controllers\ObatController::class, 'edit']);
    Route::get('/obat/update/{id}', [App\Http\Controllers\ObatController::class, 'update']);
    Route::get('/obat/destroy/{id}', [App\Http\Controllers\ObatController::class, 'destroy']);




    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->middleware('superadmin:superadmin');
    Route::get('/user/read', [App\Http\Controllers\UserController::class, 'read'])->middleware('superadmin:superadmin');
    Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'edit']);
    Route::get('/user/update/{id}', [App\Http\Controllers\UserController::class, 'update']);

});