<?php

use App\Models\Order;
use App\Models\Booking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
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
    return view('about');
});

Route::get('/confirm', function () {
    return view('confirm');
});

Route::get('/gallery', fn () => view('gallery'));
Route::get('/pricing', fn () => view('pricing'));

Route::get('/contact', [OrderController::class, 'create']);
Route::post('/contact', [OrderController::class, 'store']);




Route::get('/booking/{booking:type}', function (Booking $booking) {
    return view('booking', [
        'booking' => $booking
    ]);
    // dd($booking);
});


Route::get('/bookings', fn () => view(
    'bookings',
    [
        'bookings' => Order::all()
    ]
));
