<?php

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('body',\App\Http\Controllers\BodyController::class);
    Route::get('/body-weight', [\App\Http\Controllers\BodyController::class, 'weight']);
    Route::get('/body-body', [\App\Http\Controllers\BodyController::class, 'body']);
    Route::post('/create-stats2', [\App\Http\Controllers\BodyController::class,'createStats']);

    Route::get('/training-create', [\App\Http\Controllers\TrainingController::class,'create']);
    Route::get('/training-index', [\App\Http\Controllers\TrainingController::class,'index']);
    Route::get('/training-calendar', [\App\Http\Controllers\TrainingController::class,'calendar']);

    Route::post('/create-training2', [\App\Http\Controllers\TrainingController::class,'createTraining']);

    Route::resource('injury',\App\Http\Controllers\InjuryController::class);
    Route::get('/injury-injury', [\App\Http\Controllers\InjuryController::class, 'broken']);
    Route::get('/injury-ill', [\App\Http\Controllers\InjuryController::class, 'ill']);
    Route::post('/create-injury', [\App\Http\Controllers\InjuryController::class,'createHealth']);


});


