<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApiController;


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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::put('/create',[\App\Http\Controllers\HomeController::class,'create'])->name('create');

Route::get('/{id}/edit',[App\Http\Controllers\HomeController::class,'edit'])->name('edit');

Route::get('/{id}/delete',[App\Http\Controllers\HomeController::class,'delete'])->name('delete');

Route::get('/{id}',[App\Http\Controllers\HomeController::class,'show'])->name('show');

Route::put('/{id}',[App\Http\Controllers\HomeController::class,'update'])->name('update');

