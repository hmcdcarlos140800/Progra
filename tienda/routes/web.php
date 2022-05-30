<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jeansController;
use App\Http\Controllers\shirtController;
use App\Http\Controllers\shoesController;
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

Auth::routes();

Route::resource('categorias',App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::resource('cpostales',App\Http\Controllers\CpostaleController::class)->middleware('auth');
Route::resource('ropas',App\Http\Controllers\RopaController::class)->middleware('auth');
Route::resource('clientes',App\Http\Controllers\ClienteController::class)->middleware('auth');
Route::resource('compras',App\Http\Controllers\CompraController::class)->middleware('auth');
Route::resource('dcompras',App\Http\Controllers\DcompraController::class)->middleware('auth');

Route::get('/jeans',[jeansController::class,'jeans'])->name('jeans.index');
Route::get('/shirt',[shirtController::class,'shirt'])->name('shirt.index');
Route::get('/shoes',[shoesController::class,'shoes'])->name('shoes.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
