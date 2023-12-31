<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('/students',[StudentController::class,"index"]);
Route::post('/students/add',[StudentController::class,"store"]);
Route::post('/students/update/{id}',[StudentController::class,"update"]);
Route::post('/students/delete',[StudentController::class,"destroy"]);
Route::get('/students/{id}',[StudentController::class,"show"]);
