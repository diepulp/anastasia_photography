<?php

use App\Models\Order;
use App\Models\Booking;
use App\Mail\OrderShipped;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

//Mail MarkDown Test in the browser
Route::get('/mail/', function () {
    $markdown = new Markdown(view(), config('mail.markdown'));

    return $markdown->render('emails.orders.received');
});

Route::get('/about', function () {
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
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

// Logout
Route::post('/logout', [RegisterController::class, 'logout']);

// show login form
Route::get('/login', [RegisterController::class, 'login']);

// Authenticate user
Route::post('/users/authenticate', [RegisterController::class, 'authenticate']);

// Admin Section
Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');

//Show the latest order that matches the id
Route::get('/confirm/{order}', [OrderController::class, 'show'])->name('confirm');
