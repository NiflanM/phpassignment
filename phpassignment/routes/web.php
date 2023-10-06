<?php

use App\Http\Controllers\Authcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ReservationController;
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
function set_active($route){
    if(is_array($route)){
        return in_array(Request::path(),$route)? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

Route::get('/', function () {
    return view('login');
});

Auth::routes();

Route::group(['middleware' => 'guest'], function () {
   


Route::get('login',[Authcontroller::class,'login'])->name('login');
Route::post('login',[Authcontroller::class,'loginPost'])->name('login');
Route::get('register',[Authcontroller::class,'register'])->name('register');
Route::post('register',[Authcontroller::class,'registerPost'])->name('register');
Route::get('profile',[Authcontroller::class,'profile'])->name('profile');
});

Route::group(['middleware' => 'auth'], function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


});
Route::group(['middleware' => 'auth'], function () {

    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    
    
    });

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/feedback', [App\Http\Controllers\FeedbackController::class, 'index'])->name('feedback');
       
        Route::get('/showfeedback', [App\Http\Controllers\FeedbackController::class, 'showfeedback'])->name('feedback');
        
        });
        
          Route::group(['middleware' => 'auth'], function () {

            Route::resource("/customer",CustomerController::class);
       
            
        
        });
        
        Route::group(['middleware' => 'auth'], function () {

            Route::get('/reservation', [App\Http\Controllers\ReserController::class, 'index'])->name('reservation');
           
             Route::get('/showreservation', [App\Http\Controllers\FeedbackController::class, 'showreservation'])->name('reservation');
            
            });