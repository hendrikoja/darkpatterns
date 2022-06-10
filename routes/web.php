<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addtest', function () {
    return view('useradd');
});

//Tagasta kõik küsimused vastustega JSON vormis
Route::get('/users', [QuestionController::class, "index"]);

//Edetabeli tagastamine JSON vormis
Route::get('/leaderboard', [UserController::class, "getLeaderboard"]);

//Kasutajate lisamise route
Route::post("/addtest/add", [UserController::class, "store"]);


