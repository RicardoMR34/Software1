<?php

use App\Http\Controllers\MathController;

Route::get('/add/{a}/{b}', [MathController::class, 'add']);
Route::get('/subtract/{a}/{b}', [MathController::class, 'subtract']);
Route::get('/multiply/{a}/{b}', [MathController::class, 'multiply']);
Route::get('/divide/{a}/{b}', [MathController::class, 'divide']);
Route::get('/power/{base}/{exponent}', [MathController::class, 'power']);
Route::get('/square-root/{number}', [MathController::class, 'squareRoot']);
