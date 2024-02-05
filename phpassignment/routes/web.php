<?php

use App\Http\Controllers\Authcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
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
    return view('welcome');
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
        // GET route for showing the form
        Route::get('/feedback', [App\Http\Controllers\FeedbackController::class, 'index'])->name('feedback.index');
        
        // POST route for submitting the form
        Route::post('/feedback', [App\Http\Controllers\FeedbackController::class, 'store'])->name('feedback.store');
        
        // GET route for displaying feedback (if needed)
        Route::get('/showfeedback', [App\Http\Controllers\FeedbackController::class, 'showfeedback'])->name('feedback.show');
    
        Route::delete('/showfeedback/{customer_id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
    });
    
    
          Route::group(['middleware' => 'auth'], function () {

            Route::resource("/customer",CustomerController::class);
       
            
        
        });
        
        Route::group(['middleware' => 'auth'], function () {
            Route::put('/reservations/{id}/accept', [ReservationController::class,'acceptReservation'])->name('reservations.acceptReservation');
            Route::put('/reservations/{id}/decline', [ReservationController::class,'declineReservation'])->name('reservations.declineReservation');

            
            Route::resource('/reservations', ReservationController::class);
            Route::post('/process-payment', [PaymentController::class, 'processPayment'])->name('process-payment');
             Route::get('/checkout/{reservation}', [ReservationController::class, 'checkout'])->name('checkout');
             Route::get('/payment-success', function () {
                return view('payment-success');
            })->name('payment-success');

            });
            
                  
        Route::group(['middleware' => 'auth'], function () {

            Route::resource('dashboard', DashboardController::class);
            
            });
        

    

// Add these routes
// routes/web.php


