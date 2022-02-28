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

// Front End

// home
Route::get('/',[HomeController::class,'index']);
Route::get('/trangchu',[HomeController::class,'index']);
Route::get('/404',[HomeController::class,'link404']);
Route::post('/tim-kiem',[HomeController::class,'search']);
// yard
Route::get('/san',[YardController::class,'index']);
Route::get('/thongtinsan',[YardController::class,'details']);

