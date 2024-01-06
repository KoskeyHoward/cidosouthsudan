<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\programController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\leaveCommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\volunteerApplicationController;
use App\Http\Controllers\PartnerController;
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
Route::get('footer', [HomeController::class, 'footerList']);
// web.php
// Route::get('projectItem/{id}', [projectsController::class, 'shareToSocials'])->name('share.socials');

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

Route::get('/project/{id}', [projectsController::class, 'show'])->name('project');
Route::get('/project/{id}/prev', [projectsController::class, 'showPrev'])->name('project.showPrev');
Route::get('/project/{id}/next', [projectsController::class, 'showNext'])->name('project.showNext');

Route::get('volunteer', [UserController::class, 'Volunteers']);
Route::get('about', [UserController::class, 'employees']);

Route::get('/become-volunteer', function () {
    return view('become-volunteer');
})->name('become-volunteer');

Route::get('/donationForm', function () {
    return view('donationForm');
})->name('donationForm');

Route::get('/read-more', function () {
    return view('read-more-projects');
})->name('read-more');;


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
    //dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //users    
    Route::get('new-user/{id?}',[UserController::class,'create'])->name('create-user');
    Route::post('new-user/create/{id?}',[UserController::class,'store'])->name('store-user');
       
    Route::get('edit-profile/{id}', [UserController::class, 'edit'])->name('edit-profile');
    
    Route::put('update-profile/{id}', [UserController::class, 'update']);
    Route::get('delete-user/{id}', [UserController::class, 'destroy']);
    Route::get('/user-profile/{user}', [UserController::class, 'profile'])->name('user-profile');

    // Route::get('dash-partners', [UserController::class, 'partnersIndex']);
    Route::get('edit-admin/{id}', [AdminController::class, 'edit'])->name('edit-admin');
    Route::put('update-admin/{id}', [AdminController::class, 'update'])->name('update-admin');
    Route::get('admin-profile', [AdminController::class, 'index'])->name('admin-profile');

    Route::get('/change-password', function () {
        return view('admin.change-password');
    })->name('change-password');
    Route::put('update-password',[ChangePasswordController::class, 'changePassword'])->name('update-password');

    //projects
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

    //admin-partners routes
    Route::get('dash-partners', [PartnerController::class, 'index']);

    Route::get('dash-partner', [PartnerController::class, 'indexPartners']);
    Route::get('dash-partnerItem/{id}', [PartnerController::class, 'indexPartners']);
    Route::get('new-program', [PartnerController::class, 'partnerProgram']);

    Route::get('new-partner', [PartnerController::class, 'create']);
    Route::post('new-partner', [PartnerController::class, 'store']);

    Route::get('edit-partner/{id}', [PartnerController::class, 'edit']);
    Route::put('update-partner/{id}', [PartnerController::class, 'update']);

    Route::get('delete-partner/{id}', [PartnerController::class, 'destroy']);
});
