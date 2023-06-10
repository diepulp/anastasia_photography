<?php

use App\Models\Order;
use App\Models\Booking;
use App\Mail\OrderShipped;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Landing page
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/gallery', fn () => view('gallery'));
Route::get('/pricing', fn () => view('pricing'));

// Order_________________________________________________________________________

Route::get('/contact', [OrderController::class, 'create']);
Route::post('/contact', [OrderController::class, 'store']);

//Registration_____________________________________________________________________

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest'); //only for users that are not registered

// Create new user
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

// Logout
Route::post('/logout', [RegisterController::class, 'logout']);

// show login form
Route::get('/login', [RegisterController::class, 'login']);

// Authenticate user
Route::post('/users/authenticate', [RegisterController::class, 'authenticate']);

// Admin Section ________________________________________________________________

Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::post('/admin', [EventController::class, 'store'])->middleware('admin');

// Events_______________________________________________________________________

Route::get('/events', [EventController::class, 'index'])->name('events');
Route::post('/events', [EventController::class, 'store']);

//Single event
Route::get('/show/{event}', [EventController::class, 'show']);

//Show the latest order that matches the id (should be last)
Route::get('/confirm/{order}', [OrderController::class, 'index'])->name('confirm');




//Mail MarkDown Test in the browser
// Route::get('/mail/', function () {
//     $markdown = new Markdown(view(), config('mail.markdown'));

//     return $markdown->render('emails.orders.received');
// });

// Playground_______________________________________________________
// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/map', fn () => view('components.map'));