<?php

use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [NinjaController::class, 'index']);

Route::get("/users/create", [NinjaController::class, 'create']);

Route::get('/users/{id}', [NinjaController::class, 'show']);
