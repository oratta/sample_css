<?php

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
    return view('home');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/series_a/top', function () {
    return view('series_a.top');
})->name('series_a.top');

Route::get('/series_a/content', function () {
    return view('series_a.content');
})->name('series_a.content');