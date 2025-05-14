<?php

use App\Http\Controllers\OurController;
use Illuminate\Support\Facades\Route;


Route::get('/', [OurController::class, 'helloWorld']);
Route::get('/greeting', [OurController::class, 'greeting']);
Route::get('/bye', [OurController::class, 'bye']);
Route::get('/fun-fact', [OurController::class, 'funFact']);