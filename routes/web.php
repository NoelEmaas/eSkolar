<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CustomAuthController;
use App\Http\Controllers\Api\V1\ScholarshipController;
use App\Http\Controllers\Api\V1\ForumController;
use App\Http\Controllers\Api\V1\CommentController;

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

// Route::get('/scholarships', function () {
//     return view('scholarships');
// });

Route::get('/forums', function () {
    return view('forums');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () {
    return view('profile');
});

// Authentication routes
Route::post('login', [CustomAuthController::class, 'login'])->name('login');
Route::post('register', [CustomAuthController::class, 'register'])->name('register');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

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
Route::post('random', [CommentController::class, 'store'])->middleware('auth')->name('add.comment');
Route::delete('comments', [CommentController::class, 'destroy'])->middleware('auth')->name('delete.comment');