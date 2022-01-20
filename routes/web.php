<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\YardController;
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

// Front End

// home
Route::get('/',[HomeController::class,'index']);
Route::get('/trangchu',[HomeController::class,'index']);
Route::get('/404',[HomeController::class,'link404']);
Route::post('/tim-kiem',[HomeController::class,'search']);
// yard
Route::get('/yard',[YardController::class,'index']);
Route::get('/yard-details',[YardController::class,'details']);


