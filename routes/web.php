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

Route::post("/addtest/add", [UserController::class, "store"]);

/*
Route::get('/users', function () {
    return view('usertest');
});
*/

Route::get('/users', [QuestionController::class, "index"]);