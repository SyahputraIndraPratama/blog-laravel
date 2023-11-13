<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'home']);
Route::get('tambah-blog', [BlogController::class, 'tambahblog']);
Route::post('simpanblog', [BlogController::class, 'simpanBlog']);
Route::get('detail-blog/{id}', [HomeController::class, 'detail']);
Route::get('hapus-blog/{id}', [HomeController::class, 'hapus']);
Route::get('edit-blog/{id}', [HomeController::class, 'ubah']);
Route::put('update-blog/{id}', [HomeController::class, 'update']);
