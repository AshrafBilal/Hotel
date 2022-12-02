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

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(App\Http\Controllers\Frontend\PropertyController::class)->group(function(){
    Route::get('properties','index');
    Route::get('properties/{id}/show','show');
    Route::get('properties/{name}','eachRoom');
    Route::get('show/{id}','showEachRoom');
});

Route::controller(App\Http\Controllers\ReservationController::class)->group(function(){
    Route::post('reservation','store');

});

Route::controller(App\Http\Controllers\Frontend\RoomController::class)->group(function(){
    Route::get('rooms','index');
});


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

     //Slider
     Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function(){
        Route::get('sliders','index');
        Route::get('sliders/create', 'create');
        Route::post('sliders', 'store');
        Route::get('sliders/{sliders}/edit', 'edit');
        Route::put('sliders/{sliders}', 'update');
    });

     //City
     Route::controller(App\Http\Controllers\Admin\CityController::class)->group(function(){
        Route::get('city','index');
        Route::get('city/create', 'create');
        Route::post('city', 'store');
        Route::get('city/{city}/edit', 'edit');
        Route::put('city/{city}', 'update');
        Route::delete('city/{city}', 'delete');
    });

    //Property
    Route::controller(App\Http\Controllers\Admin\PropertyController::class)->group(function(){

        Route::get('property','index');
        Route::get('property/create', 'create');
        Route::post('property', 'store');
        Route::get('property/{property}/edit', 'edit');
        Route::put('property/{property}', 'update');
        Route::delete('property/{property}', 'delete');

    });

     //Room
     Route::controller(App\Http\Controllers\Admin\RoomController::class)->group(function(){
        Route::get('room','index');
        Route::get('room/create', 'create');
        Route::post('room', 'store');
        Route::get('room/{room}/edit', 'edit');
        Route::put('room/{room}', 'update');
        Route::delete('room/{room}', 'delete');
    });

     //Payment
     Route::controller(App\Http\Controllers\Admin\PaymentController::class)->group(function(){
        Route::get('payment','index');
        Route::get('payment/create', 'create');
        Route::post('payment', 'store');
        Route::get('payment/{payment}/edit', 'edit');
        Route::put('payment/{payment}', 'update');
        Route::delete('payment/{payment}', 'delete');
    });

     //Reservation
    Route::controller(App\Http\Controllers\ReservationController::class)->group(function(){
        Route::get('reservation','index');
    });

    //Users
    Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function(){
        Route::get('users','index');
    });

});
