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

Route::get('/Bedrooms', function () {
    return view('Bedrooms', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Bedrooms"
    ]);
});

Route::get('/Cabinets', function () {
    return view('Cabinets', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Cabinets"
    ]);
});

Route::get('/Lightings', function () {
    return view('Lightings', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Lightings"
    ]);
});

Route::get('/Mirrors', function () {
    return view('Mirrors', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Mirros"
    ]);
});

Route::get('/Rugs', function () {
    return view('Rugs', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Rugs"
    ]);
});

Route::get('/Seatings', function () {
    return view('Seatings', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Seatings"
    ]);
});

Route::get('/Swatches', function () {
    return view('Swatches', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Swatches"
    ]);
});

Route::get('/Tabels', function () {
    return view('Tabels', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Tabels"
    ]);
});

Route::get('/Item', function () {
    return view('Item', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "detail" => "img/DETAIL.png",
        "title" => "Detail"
    ]);
});

// admin

Route::get('/admin/Bedrooms', function () {
    return view('admin/bedrooms', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Bedrooms"
    ]);
});

Route::get('/admin/Cabinets', function () {
    return view('admin/cabinets', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Cabinets"
    ]);
});

Route::get('/admin/Lightings', function () {
    return view('admin/lightings', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Lightings"
    ]);
});

Route::get('/admin/Mirrors', function () {
    return view('admin/mirrors', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Mirros"
    ]);
});

Route::get('/admin/Rugs', function () {
    return view('admin/sugs', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Rugs"
    ]);
});

Route::get('/admin/Seatings', function () {
    return view('admin/seatings', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Seatings"
    ]);
});

Route::get('/admin/Swatches', function () {
    return view('admin/swatches', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Swatches"
    ]);
});

Route::get('/admin/Tabels', function () {
    return view('admin/tabels', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "title" => "Tabels"
    ]);
});

Route::get('/admin/Item', function () {
    return view('Item', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png",
        "detail" => "img/DETAIL.png",
        "title" => "Detail"
    ]);
});

Route::get('/admindmin', function () {
    return view('admin/login', [
        "logo" => "img/logo.png",
        "title" => "login"
    ]);
});

Route::get('/home', function () {
    return view('admin/home', [
        "bg" => "img/bg.png",
        "logo" => "img/logo.png",
        "conten" => "img/conten.png"
    ]);
});
