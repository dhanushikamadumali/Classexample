<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get("testroute",[ExampleController::class,'firstfun',]);
Route::get("testsum",[ExampleController::class,'getitem',]);
Route::post("getsum",[ExampleController::class,'getSumWithPayLoad',]);
