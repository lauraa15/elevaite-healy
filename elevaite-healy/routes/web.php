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
    return view('health');
})->name('dashboard');

Route::get('/insights', function () {
    return view('insights');
})->name('insights');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
