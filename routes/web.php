<?php

use App\Http\Controllers\API\ListAplikasiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

// Auth::routes();

// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
// Route::get('home', [HomeController::class, 'userHome'])->name('user.home');

// Route::prefix('list')->group(function(){
//     Route::get('/all', [ListAplikasiController::class, 'index']);
//     Route::post('/tambah', [ListAplikasiController::class, 'store']);
//     Route::get('/aplikasi/{id}', [ListAplikasiController::class, 'show']);
//     Route::put('/update/{id}', [ListAplikasiController::class, 'update']);
//     Route::delete('/delete/{id}', [ListAplikasiController::class, 'destroy']);
// });

// Route::prefix('token')->group(function(){
//     Route::get('/all', [TokenController::class, 'index']);
//     Route::post('/tambah', [TokenController::class, 'store']);
// });