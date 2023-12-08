<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\programController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\leaveCommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\volunteerApplicationController;
use App\Http\Controllers\VolunteersController;
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

Route::get('projects', [projectsController::class, 'home']);
Route::get('project', [projectsController::class, 'homeproject']);
Route::get('projectItem/{id}', [projectsController::class, 'homeproject']);
Route::get('project', [projectsController::class, 'sidebar']);
// web.php
// Route::get('projectItem/{id}', [projectsController::class, 'share'])->name('project');

Route::post('project', [leaveCommentController::class, 'comment'])->name('project.comment');

// Route::get('/projects', function () {
//     return view('projects');
// })->name('projects');

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

// Route::get('/programs', function () {
//     return view('programs');
// })->name('programs');

Route::get('programs', [programController::class, 'home']);
Route::get('/', [programController::class, 'homepage']);
Route::get('program', [programController::class, 'homeprogram']);
Route::get('programItem/{id}', [programController::class, 'homeprogram']);

Route::get('/program/{id}', [programController::class, 'show'])->name('program');
Route::get('/program/{id}/prev', [programController::class, 'showPrev'])->name('program.showPrev');
Route::get('/program/{id}/next', [programController::class, 'showNext'])->name('program.showNext');


Route::get('volunteer', [VolunteersController::class, 'home']);

Route::get('/become-volunteer', function () {
    return view('become-volunteer');
})->name('become-volunteer');

Route::get('/donationForm', function () {
    return view('donationForm');
})->name('donationForm');

Route::get('/read-more', function () {
    return view('read-more-projects');
})->name('read-more');;





Route::get('/user-profile', function (){
    return view('/admin.user-profile');
})->name('/user-profile');

Route::get('/edit-profile', function (){
    return view('/admin.edit-profile');
})->name('/edit-profile');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/become-volunteer', [volunteerApplicationController::class, 'apply'])->name('volunteer.apply');

Route::get('/health', function () {
    return response()->json(['status' => 'success']);
});

//admin dashboard

Route::get('new-project', [DashboardController::class, 'create']);
Route::post('new-project', [DashboardController::class, 'store']);

Route::get('edit-project/{id}', [DashboardController::class, 'edit']);
Route::put('update-project/{id}', [DashboardController::class, 'update']);

Route::get('delete-project/{id}', [DashboardController::class, 'destroy']);

//admin-project route
Route::group(['middleware' => 'auth'],function () {
    // Your routes here
    // Route::get('/dashboard', function () {
    //     return view('/admin.dashboard'); })->name('dashboard');
    Route::get('dashboard', [DashboardController::class, 'index']);
        
        Route::get('new-user/{id?}',[UserController::class,'create'])->name('create-user');
        Route::post('new-user/create/{id?}',[UserController::class,'store'])->name('store-user');
        Route::post('new-user/edit/{id?}',[UserController::class,'edit'])->name('edit-user');
        Route::post('new-user/delete/{id?}',[UserController::class,'destroy'])->name('delete-user');

    Route::get('dash-projects', [projectsController::class, 'index']);
    Route::get('user-management',[UserController::class, 'index'])->name('user.index');

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

    //admin-volunteer routes
    Route::get('dash-volunteers', [VolunteersController::class, 'index']);

    Route::get('dash-volunteer', [VolunteersController::class, 'indexvolunteer']);
    Route::get('dash-volunteerItem/{id}', [VolunteersController::class, 'indexvolunteer']);

    Route::get('new-volunteer', [VolunteersController::class, 'create']);
    Route::post('new-volunteer', [VolunteersController::class, 'store']);

    Route::get('edit-volunteer/{id}', [VolunteersController::class, 'edit']);
    Route::put('update-volunteer/{id}', [VolunteersController::class, 'update']);

    Route::get('delete-volunteer/{id}', [VolunteersController::class, 'destroy']);
});
