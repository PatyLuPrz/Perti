<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/usuarios', [App\Http\Controllers\ApiController::class, 'index'])->name('api.get');

Route::post('/usuarios/create', [App\Http\Controllers\ApiController::class, 'create'])->name('api.create');

Route::post('/usuarios/{id}/edit',[App\Http\Controllers\ApiController::class,'edit'])->name('edit');

Route::get('/usuarios/{id}',[App\Http\Controllers\ApiController::class,'show'])->name('api.show');

