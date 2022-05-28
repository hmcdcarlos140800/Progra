<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrarController;
use App\Http\Controllers\sesionesController;
use App\Http\Controllers\homeController;

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
Route::get('/registrar',[registrarController::class,'crear'])->name('registrar.index');
Route::get('/login',[sesionesController::class,'crear'])->name('login.index');
Route::get('/welcome',[homeController::class,'home'])->name('welcome.index');
Route::get('/home',[welcomeController::class,'welcome']);
Route::post('/registrar',[registrarController::class,'register']);


