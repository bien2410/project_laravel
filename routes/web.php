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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/header', function () {
    return view('header');
})->name('header');

Route::get('/footer', function () {
    return view('footercl');
})->name('footer');

Route::get('/sidebar', function () {
    return view('sidebar');
})->name('sidebar');

Route::get('/home', function () {
    return view('home');
})->name('home');