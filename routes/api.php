<?php

use App\Http\Controllers\api10controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Orion\Facades\Orion as OrionRoute;

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
orionRoute::resource('api10', api10Controller::class);