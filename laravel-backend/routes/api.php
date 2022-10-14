<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;

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



Route::get("list/{id?}",[StudentController::class,'index']);

Route::post("add",[StudentController::class,'create']);
Route::put("update",[StudentController::class,'update']);

Route::get("search/{name}",[StudentController::class,'search']);


Route::delete("delete/{id}",[StudentController::class,'destroy']);

Route::apiResource('student',StudentController::class);

Route::post('upload',[StudentController::class,'upload']);


//fair
Route::get("product/{id?}",[ProductController::class,'index']);
Route::get("student",[StudentController::class,'index']);
Route::post("after_checkout",[OrderController::class,'after_checkout']);
Route::post("create_user",[UserController::class,'store']);
Route::post("login",[UserController::class,'login']);
