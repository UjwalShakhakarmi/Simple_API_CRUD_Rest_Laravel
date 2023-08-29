<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/student',[ApiController::class,'create']);
//Retrive data using API
Route::get('/students',[ApiController::class,'showData']);

Route::get('/student/{id}',[ApiController::class,'ShowById']);

Route::put('/studentUpdate/{id}',[ApiController::class,'UpdateById']);

Route::delete('/studentDelete/{id}',[ApiController::class,'DeleteById']);