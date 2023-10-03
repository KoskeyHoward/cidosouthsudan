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
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/programs', function () {
    return view('programs');
})->name('programs');

Route::get('/volunteer', function () {
    return view('volunteer');
})->name('volunteer');

Route::get('/become-volunteer', function () {
    return view('become-volunteer');
})->name('become-volunteer');

Route::get('/donationForm', function () {
    return view('donationForm');
})->name('donationForm');
Route::get('/read-more', function () {
    return view('read-more-projects');
})->name('read-more');



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
