<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WorkoutController;
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



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/workouts', [WorkoutController::class, 'main'])->name('workouts.main');
    Route::get('/workouts/custom', [WorkoutController::class, 'custom'])->name('workouts.custom');
    Route::get('/workouts/list', [WorkoutController::class, 'workoutslist'])->name('workouts.list');
    Route::get('/workouts/current', [WorkoutController::class, 'current'])->name('workouts.current');
});

// Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
// Route::get('/workouts', [WorkoutController::class, 'main'])->name('workouts.main');
// Route::get('/workouts/custom', [WorkoutController::class, 'custom'])->name('workouts.custom');
// Route::get('/workouts/list', [WorkoutController::class, 'workoutslist'])->name('workouts.list');
// Route::get('/workouts/current', [WorkoutController::class, 'current'])->name('workouts.current');