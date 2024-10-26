<?php

use App\Http\Controllers\EventController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //List all events with category
    Route::get('/events', [EventController::class, 'apiIndex']);

    //Show single events with category and attendees
    Route::get('/events/{id}', [EventController::class, 'apiShow']);

    return $request->user();
});



