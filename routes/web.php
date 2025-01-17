<?php

use App\Http\Controllers\GreetingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comments/random/', [GreetingController::class, 'greeting03']);
Route::get('/comments/{greeting}', [GreetingController::class, 'greeting01']);
Route::get('/comments/freeword/{freeword}', [GreetingController::class, 'greeting02']);

