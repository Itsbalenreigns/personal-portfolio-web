<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\EducationController as AdminEducationController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\SkillController as AdminSkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes (NO LOGIN)
|--------------------------------------------------------------------------
*/

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    // Route::get('/about', 'about')->name('page.about');
    // Route::get('/education', 'education')->name('page.education');
    // Route::get('/skills', 'skills')->name('page.skills');
    // Route::get('/projects', 'projects')->name('page.projects');
    // Route::get('/contact', 'contact')->name('page.contact');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/about', [AboutController::class, 'about'])->name('pages.about');
Route::get('/education', [EducationController::class, 'education'])->name('pages.education');
Route::get('/skill', [SkillController::class, 'skill'])->name('pages.skills');
Route::get('/project', [ProjectController::class, 'project'])->name('pages.projects');

Route::get('/contact', [ContactController::class, 'contact'])->name('pages.contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin Routes
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('about', \App\Http\Controllers\Admin\AboutController::class);
    Route::resource('education', \App\Http\Controllers\Admin\EducationController::class);
    Route::resource('skill', \App\Http\Controllers\Admin\SkillController::class);
    Route::resource('project', \App\Http\Controllers\Admin\ProjectController::class);
});
