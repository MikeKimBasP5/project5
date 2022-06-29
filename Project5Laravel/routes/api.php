<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ExercisesController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\UserController;
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

Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::apiResource('exercises', ExercisesController::class)->parameters(['exercises' => 'exercise'])->only(['index','show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthenticationController::class, 'logout']);
    Route::get('/users/{id}/performances', [UserController::class, 'indexFunction']);
    Route::apiResource('exercises', ExercisesController::class)->parameters(['exercises' => 'exercise'])->except(['index','show']);
    Route::apiResource('performances',PerformanceController::class)->parameters(['performances' => 'performance'])->except(['index','show']);
});



