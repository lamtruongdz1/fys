<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\YardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;

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
// layout Front end + Back end + demo
Route::get('/layout',[LayoutController::class,'layout']);
Route::get('/demo',[LayoutController::class,'demo']);
Route::get('/layout_admin',[LayoutController::class,'admin']);


// Front End

// home
Route::get('/',[HomeController::class,'index']);
Route::get('/trangchu',[HomeController::class,'index']);
Route::get('/404',[HomeController::class,'link404']);
Route::post('/tim-kiem',[HomeController::class,'search']);
// yard
Route::get('/yard',[YardController::class,'index']);
Route::get('/yard-details',[YardController::class,'details']);

//Backend
Route::get('/admin',[AdminController::class,'index']);
Route::get('/reset',[AdminController::class,'reset']);
Route::get('/dashboard',[AdminController::class,'show_dashboard']);
Route::get('/logout',[AdminController::class,'logout']);
Route::post('/admin-dashboard',[AdminController::class,'dashboard']);


Route::get('/dashboard/profile',[AdminController::class,'profile']);
Route::get('/dashboard/profile/edit',[AdminController::class,'edit']);

// yard
Route::get('/add-yard',[YardController::class,'add_yard']);
Route::get('/edit-yard',[YardController::class,'edit']);
Route::get('/delete-yard/{category_product_id}',[YardController::class,'index']);
Route::get('/list-yard',[YardController::class,'list']);

// booking
Route::get('/booking-list',[BookingController::class,'list']);
Route::get('/booking-details',[BookingController::class,'details']);
