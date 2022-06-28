<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExercisesController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\UserController;
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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        if (Auth::check() && Auth::user()->hasRole("admin")) {
            return redirect(route('adminpanel'));
        } else {
            return redirect(route('performances.index'));
        }
    })->middleware(['auth'])->name('dashboard');
    Route::get('/adminpanel', function () {return view('dashboard');})->name('adminpanel');

    Route::get('/exercises/create', [ExercisesController::class, 'createWeb'])->Name('exercises.create');
    Route::get('/exercises', [ExercisesController::class, 'indexWeb'])->name('exercises.index');

    Route::put('/exercises/{id}', [ExercisesController::class, 'update'])->Name('exercises.update');
    Route::get('/exercises/{id}/edit', [ExercisesController::class, 'edit'])->Name('exercises.edit');
    Route::delete('/exercises/{id}', [ExercisesController::class, 'destroy'])->Name('exercises.destroy');

    Route::post('/exercises/create', [ExercisesController::class, 'storeWeb'])->Name('exercises.store');

    Route::get('/performances/create', [PerformanceController::class, 'createWeb'])->Name('performances.create');
    Route::get('/performances', [PerformanceController::class, 'indexWeb'])->name('performances.index');
    Route::get('/performances/{id}', [PerformanceController::class, 'showWeb'])->Name('performances.show');
    Route::post('/performances/create', [PerformanceController::class, 'storeWeb'])->Name('performances.store');
    Route::delete('/performances/{id}', [PerformanceController::class, 'destroy'])->Name('performances.destroy');
    Route::get('/users/{id}/performances', [PerformanceController::class, 'indexFunctionWeb'])->Name('performances.indexfunction');

    //users ofzo
    Route::get('/users', [UserController::class, 'indexWeb'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'createWeb'])->Name('users.create');
    Route::put('/users/{id}', [UserController::class, 'update'])->Name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->Name('users.edit');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->Name('users.destroy');

});
require __DIR__ . '/auth.php';
