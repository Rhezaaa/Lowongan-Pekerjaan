<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/',[\App\Http\Controllers\Frontend\HomepageController::class, 'index'])->name('homepage');
Route::get('/jobs',[\App\Http\Controllers\Frontend\JoblistController::class, 'index'])->name('jobs');
Route::get('/jobs/{job:slug}',[\App\Http\Controllers\Frontend\JoblistController::class, 'show'])->name('job.detail');
Route::get('/jobs/category/{category:slug}',[\App\Http\Controllers\Frontend\JoblistController::class, 'category'])->name('job.category');
Route::get('/about',[\App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');
Route::get('/contact',[\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name("contact");
Route::post('/contact',[\App\Http\Controllers\Frontend\ContactController::class, 'store'])->name("contact.store");

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'isAdmin','prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::resource('categories', \App\Http\Controllers\admin\CategoryController::class)->except('show');
    Route::resource('companies', \App\Http\Controllers\admin\CompanyController::class)->except('show');
    Route::resource('jobs', \App\Http\Controllers\admin\JobController::class)->except('show');
    Route::resource('testimonials', \App\Http\Controllers\admin\TestimonialController::class)->except('show');
    Route::resource('contacts', \App\Http\Controllers\Admin\ContactController::class)->except('show');
});
