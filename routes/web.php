<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\volunteerApplicationController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/story', function () {
    return view('story');
})->name('story');

Route::get('/mainstreaming-covid', function () {
    return view('mainstreaming-covid');
})->name('mainstreaming-covid');

Route::get('/covid-training', function () {
    return view('covid-training');
})->name('covid-training');

Route::get('/covid-awareness', function () {
    return view('covid-awareness');
})->name('covid-awareness');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/programs', function () {
    return view('programs');
})->name('programs');

Route::get('/peace-building', function () {
    return view('peace-building');
})->name('peace-building');

Route::get('/women-rights', function () {
    return view('women-rights');
})->name('women-rights');

Route::get('/health-and-nutrition', function () {
    return view('health-and-nutrition');
})->name('health-and-nutrition');

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

Route::get('/dashboard', function (){
    return view('dashboard');
})->name('dashboard');

Route::get('/dash-programs', function (){
    return view('dash-programs');
})->name('dash-programs');

Route::get('/dash-program', function (){
    return view('dash-program');
})->name('dash-program');

Route::get('/edit-dashprograms', function (){
    return view('/edit-dashprograms');
})->name('/edit-dashprograms');

Route::get('/new-program', function (){
    return view('/new-program');
})->name('/new-program');

Route::get('/user-management', function (){
    return view('/user-management');
})->name('/user-management');

Route::get('/new-user', function (){
    return view('/new-user');
})->name('/new-user');

Route::get('/dash-project', function (){
    return view('dash-project');
})->name('dash-project');

Route::get('/dash-projects', function (){
    return view('dash-projects');
})->name('dash-projects');

Route::get('/new-project', function (){
    return view('/new-project');
})->name('/new-project');

Route::get('/edit-dashprojects', function (){
    return view('/edit-dashprojects');
})->name('/edit-dashprojects');
//contact routes

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/become-volunteer', [volunteerApplicationController::class, 'apply'])->name('volunteer.apply');

Route::get('/health', function () {
    return response()->json(['status' => 'success']);
});
