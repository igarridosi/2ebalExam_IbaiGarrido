<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);

//EVENTS
Route::get('events', [EventsController::class, 'index']);
Route::get('events/{event}', [EventsController::class, 'show']);
Route::post('events/create', [EventsController::class, 'store']);
Route::put('events/{event}', [EventsController::class, 'update']);
Route::delete('events/{event}', [EventsController::class, 'destroy']);

//DENTIST
Route::get('dentist', [UsersController::class, 'showDentists']);
Route::get('attendants', [UsersController::class, 'getAttendants']);
Route::get('dentists/{dentist}/events', [UsersController::class, 'dentistEvents']);
Route::post('enroll', [UsersController::class, 'enroll']);

/*
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);

    //EVENTS
    Route::get('events', [EventsController::class, 'index']);
    Route::get('events/{event}', [EventsController::class, 'show']);
    //Route::get('authors/{author}/books', [EventsController::class, 'authorBooks']);
    Route::post('events/create', [EventsController::class, 'store']);
    Route::put('events/{event}', [EventsController::class, 'update']);
    Route::delete('events/{event}', [EventsController::class, 'destroy']);

    //DENTIST
    Route::get('dentist', [UsersController::class, 'showDentists']);
});
*/




