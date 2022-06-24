<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExercisesController;
use App\Http\Controllers\PerformanceController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});
Route::group(['middleware'=>'auth'], function() {
    Route::get('/dashboard', function () {return redirect(route('performances.index'));
    })->middleware(['auth'])->name('dashboard');
    Route::get('/adminpanel', function () {return view('dashboard');})->name('adminpanel');

    Route::get('/exercises/create', [ExercisesController::class, 'createWeb'])->Name('exercises.create');
    Route::get('/exercises', [ExercisesController::class, 'indexWeb'])->name('exercises.index');

    Route::post('/exercises/create',[ExercisesController::class, 'storeWeb'])->Name('exercises.store');

    Route::get('/performances/create', [PerformanceController::class, 'createWeb'])->Name('performances.create');
    Route::get('/performances', [PerformanceController::class, 'indexWeb'])->name('performances.index');
    Route::get('/performances/{id}', [PerformanceController::class, 'showWeb'])->Name('performances.show');
    Route::post('/performances/create',[PerformanceController::class, 'storeWeb'])->Name('performances.store');
    Route::delete('/performances/{id}', [PerformanceController::class, 'destroy'])->Name('performances.destroy');
    Route::get('/users/{id}/performances', [PerformanceController::class, 'indexFunctionWeb'])->Name('performances.indexfunction');
});
require __DIR__.'/auth.php';
