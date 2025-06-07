<?php

use App\Http\Controllers\InsightsController;
use App\Http\Controllers\ProfileController;
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


Route::view('/login', 'auth.login')->name('login');
// Route::view('/login', 'login')->name('login');

Route::view('/register', 'auth.register')->name('register');



Route::view('/', 'health')->name('health');
Route::view('/activity', 'activity')->name('activity');
Route::view('/insights', 'insights')->name('insights');
Route::view('/profile', 'profile')->name('profile');
