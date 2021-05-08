<?php

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
use App\Http\Controllers\HelloController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AnimalsController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello',[HelloController::class,'SayHello']);
Route::get('/teacher',[TeacherController::class,'index']);
Route::post('/teacher',[TeacherController::class,'store']);


Route::resource('/student',StudentController::class);


Route::resource('/animals',AnimalsController::class);
