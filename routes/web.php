<?php

use App\Http\Controllers\OpeController;

Route::get('/suma/{a}/{b}', [OpeController::class, 'suma']);
Route::get('/resta/{a}/{b}', [OpeController::class, 'resta']);
Route::get('/multiplicacion/{a}/{b}', [OpeController::class, 'multiplicacion']);
Route::get('/division/{a}/{b}', [OpeController::class, 'division']);
Route::get('/potencia/{base}/{exponent}', [OpeController::class, 'potencia']);
Route::get('/raiz/{number}', [OpeController::class, 'raiz']);
