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

Route::get('/', function () {
    return view('home', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png"
    ]);
});

Route::get('/Bedroom', function () {
    return view('Bedroom', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png"
    ]);
});

Route::get('/Cabinets', function () {
    return view('Cabinets', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png"
    ]);
});

Route::get('/Lighting', function () {
    return view('Lighting', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png"
    ]);
});

Route::get('/Mirrors', function () {
    return view('Mirrors', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png"
    ]);
});

Route::get('/Rugs', function () {
    return view('Rugs', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png"
    ]);
});

Route::get('/Seating', function () {
    return view('Seating', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png"
    ]);
});

Route::get('/Swatches', function () {
    return view('Swatches', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png"
    ]);
});

Route::get('/Tabels', function () {
    return view('Tabels', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png"
    ]);
});
