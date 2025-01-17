<?php

use App\Http\Controllers\GreetingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comments/random/', [GreetingController::class, 'random']);
Route::get('/comments/{greeting}', [GreetingController::class, 'greeting']);
Route::get('/comments/freeword/{freeword}', [GreetingController::class, 'freeword']);

