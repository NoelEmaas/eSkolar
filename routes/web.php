<?php

use App\Mail\SendMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CustomAuthController;

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

// Authentication routes
Route::post('login', [CustomAuthController::class, 'login'])->name('login');
Route::post('register', [CustomAuthController::class, 'register'])->name('register');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('home');
});

Route::get('/scholarships', function () {
    return view('scholarships');
});

Route::get('/forums', function () {
    return view('forums');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [MailController::class, 'submit'])->name('contact.submit');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/send', [MailController::class, 'index']);


