<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\programController;
use App\Http\Controllers\projectsController;
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
    return view('/admin.dashboard');
})->name('dashboard');

Route::get('/user-management', function (){
    return view('/admin.user-management');
})->name('/user-management');

Route::get('/new-user', function (){
    return view('/admin.new-user');
})->name('/new-user');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/become-volunteer', [volunteerApplicationController::class, 'apply'])->name('volunteer.apply');

Route::get('/health', function () {
    return response()->json(['status' => 'success']);
});

//admin-project route
Route::get('dash-projects', [projectsController::class, 'index']);

Route::get('dash-project', [projectsController::class, 'indexproject']);
Route::get('dash-projectItem/{id}', [projectsController::class, 'indexproject']);

Route::get('new-project', [projectsController::class, 'create']);
Route::post('new-project', [projectsController::class, 'store']);

Route::get('edit-project/{id}', [projectsController::class, 'edit']);
Route::put('update-project/{id}', [projectsController::class, 'update']);

Route::get('delete-project/{id}', [projectsController::class, 'destroy']);

//admin-program routes
Route::get('dash-programs', [programController::class, 'index']);

Route::get('dash-program', [programController::class, 'indexprogram']);
Route::get('dash-programItem/{id}', [programController::class, 'indexprogram']);

Route::get('new-program', [programController::class, 'create']);
Route::post('new-program', [programController::class, 'store']);

Route::get('edit-program/{id}', [programController::class, 'edit']);
Route::put('update-program/{id}', [programController::class, 'update']);

Route::get('delete-program/{id}', [programController::class, 'destroy']);