<?php

use App\Http\Controllers\DistrictController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\YardController;
use App\Http\Controllers\mainAdmin;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
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

// Front End

// home
Route::get('/',[HomeController::class,'index']);
Route::get('/trangchu',[HomeController::class,'index']);
Route::get('/404',[HomeController::class,'link404']);
Route::post('/tim-kiem',[HomeController::class,'search']);
// yard
Route::get('/san',[YardController::class,'index']);
Route::get('/san/{id}',[YardController::class,'show']);


Route::controller(mainAdmin::class)->group(function () {
    Route::get('/admin', 'index');
    Route::get('/dashboard', 'index')->name('dashboard');
});
Route::get('/export_excel', [userController::class, 'export_excel']);
Route::get('/export_csv', [userController::class, 'export_csv']);
Route::get('/export_pdf', [userController::class, 'download_pdf']);
Route::post('/import_excel', [userController::class, 'import']);
Route::get('users/permission', [userController::class, 'permission'])->name('users.permission');
Route::resource('users', userController::class);
Route::resource('yard', YardController::class);
Route::resource('districts', DistrictController::class);

// thích thì có thể viết route ntn


// login with social


// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

// Github login
Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);

