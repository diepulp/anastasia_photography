<?php

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
    return view('pages.welcome');
});
Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('about');
});

$closure = function () {
    return "HEllo, world";
};


Route::get('/hello/{num}', function ($id) {
    return response('id' . $id . "num");
});

Route::get('/gallery', fn () => view('pages.gallery'));
