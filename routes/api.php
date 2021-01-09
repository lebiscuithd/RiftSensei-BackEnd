<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdController;

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

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::apiResource('ad', 'App\Http\Controllers\AdController');

Route::apiResource('lane', 'App\Http\Controllers\LaneController');

Route::apiResource('rank', 'App\Http\Controllers\RankController');

Route::get('ad/{ad}/user', 'App\Http\Controllers\AdController@show_user');
Route::get('user/{user}/ads', 'App\Http\Controllers\UserController@show_ads');
Route::get('user/{user}/rank', 'App\Http\Controllers\UserController@show_rank');

Route::apiResource('users', 'App\Http\Controllers\UserController');

Route::get('ads/{orderBy}/{type}', 'App\Http\Controllers\AdController@orderBy');
