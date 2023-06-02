<?php

use App\Models\Order;
use App\Models\Booking;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use Symfony\Component\HttpFoundation\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    $now = now();
    var_dump($now);
    return view('about');
});

Route::get('/map', fn () => view('components.map'));

Route::get('/gallery', fn () => view('gallery'));
Route::get('/pricing', fn () => view('pricing'));

Route::get('/contact', [OrderController::class, 'create']);
Route::post('/contact', [OrderController::class, 'store']);

//Registration
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest'); //only for users that are not registered

// Create new user
Route::post('register', [RegisterController::class, 'store']);

// Logout
Route::post('/logout', [RegisterController::class, 'logout']);

// show login form
Route::get('/login', [RegisterController::class, 'login']);

// Authenticate user
Route::post('/users/authenticate', [RegisterController::class, 'authenticate']);


//Show the latest order that matches the id
Route::get('/confirm/{order}', [OrderController::class, 'show'])->name('confirm');
