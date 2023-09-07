<?php

use App\Http\Controllers\Authcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
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
    return view('login');
});

Auth::routes();

Route::group(['middleware' => 'guest'], function () {

Route::get('login',[Authcontroller::class,'login'])->name('login');
Route::post('login',[Authcontroller::class,'loginPost'])->name('login');
Route::get('register',[Authcontroller::class,'register'])->name('register');
Route::post('register',[Authcontroller::class,'registerPost'])->name('register');
});

Route::group(['middleware' => 'auth'], function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::delete('/logout',[Authcontroller::class,'logout'])->name('logout');
});