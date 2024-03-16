<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/greeting', function () {
    return 'Route' ;
});

Route::match(['get','post'], '/', function () {
   return 'This route is for put, patch, and post http verb only';
});

Route::any('/updateUserInfo', function () {
    return 'this route accepts any http verb';
});

Route::get('/users', function(Request $request){
    return $request->name . '-' . $request->email;
});

