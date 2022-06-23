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
    return view('welcome');
});
Route::group(['middleware'=>'auth'], function() {
    Route::get('/dashboard', function () {return redirect(route('performances.index'));
    })->middleware(['auth'])->name('dashboard');
    Route::get('/adminpanel', function () {return view('dashboard');})->name('adminpanel');
    Route::get('/exercises', [ExercisesController::class, 'indexWeb'])->name('exercises.index');
    Route::get('/performances', [PerformanceController::class, 'indexWeb'])->name('performances.index');
});
require __DIR__.'/auth.php';
