<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
});

Route::get('/contact-us', function () {
    return view('pages.contact-us');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/ac-ventilation', function () {
    return view('pages.services.ac-ventilation');
});
Route::get('/aluminum-glass-work', function () {
    return view('pages.services.aluminum-glass');
});
Route::get('/cctv-cameras', function () {
    return view('pages.services.camera');
});
Route::get('/electric-work-in-dubai', function () {
    return view('pages.services.electrical');
});
Route::get('/gypsum-partition-ceiling-work-in-dubai', function () {
    return view('pages.services.partition-ceiling');
});
Route::get('/painting', function () {
    return view('pages.services.painting');
});
Route::get('/plumber-work-in-dubai', function () {
    return view('pages.services.plumber');
});
Route::get('/tesla-charging', function () {
    return view('pages.services.tesla-charging');
});
Route::get('/tiling-in-dubai', function () {
    return view('pages.services.tiling');
});