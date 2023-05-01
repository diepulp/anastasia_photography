<?php

use App\Models\Booking;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/hello/{num}', function ($id) {
    return response('id' . $id . "num");
});

Route::get('/gallery', fn () => view('gallery'));
Route::get('/pricing', fn () => view('pricing'));

Route::get('/booking/{booking:type}', function (Booking $booking) {
    return view('booking', [
        'booking' => $booking
    ]);
    // dd($booking);
});

Route::get('/bookings', fn () => view(
    'bookings',
    [
        'bookings' => Booking::all()
    ]
));
