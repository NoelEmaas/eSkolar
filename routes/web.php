<?php

use App\Mail\SendMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ScholarshipController;
use App\Http\Controllers\Api\V1\ForumController;
use App\Http\Controllers\Api\V1\ProfileController;
use App\Http\Controllers\Api\V1\CommentController;
use App\Http\Controllers\Api\V1\LikeController;


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

// View Routes
Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

// Authentication routes
Route::post('login', [CustomAuthController::class, 'login'])->name('login');
Route::post('register', [CustomAuthController::class, 'register'])->name('register');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

// Contact routes
Route::get('send', [MailController::class, 'index']);
Route::post('contact', [MailController::class, 'submit'])->name('contact.submit');

// Profile routes
Route::get('profile/{user_id}', [ProfileController::class, 'index'])->name('getProfile');

// Scholarship routes
Route::get('scholarships', [ScholarshipController::class, 'index'])->name('getScholarships');
Route::get('scholarships/{scholarship_id}', [ScholarshipController::class, 'show'])->name('getScholarship');
Route::post('scholarships', [ScholarshipController::class, 'store'])->middleware('auth')->name('addScholarship');
Route::put('scholarships', [ScholarshipController::class, 'update'])->middleware('auth')->name('updateScholarship');
Route::delete('scholarships', [ScholarshipController::class, 'destroy'])->middleware('auth')->name('deleteScholarship');

// Forum routes 
Route::get('forums', [ForumController::class, 'index'])->name('getForums');
Route::get('forums/{forum_id}', [ForumController::class, 'show'])->name('getForum');
Route::post('forums', [ForumController::class, 'store'])->middleware('auth')->name('addForum');
Route::put('forums', [ForumController::class, 'update'])->middleware('auth')->name('updateForum');
Route::delete('forums', [ForumController::class, 'destroy'])->middleware('auth')->name('deleteForum');

// Comment routes
Route::post('comments', [CommentController::class, 'store'])->middleware('auth')->name('add.comment');
Route::delete('comments', [CommentController::class, 'destroy'])->middleware('auth')->name('delete.comment');

// Like routes
Route::post('likes', [LikeController::class, 'store'])->middleware('auth')->name('add.like');
Route::delete('likes', [LikeController::class, 'destroy'])->middleware('auth')->name('delete.like');