<?php

use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [NinjaController::class, 'index'])->name('users.index');
Route::get("/users/create", [NinjaController::class, 'create'])->name('users.create');
Route::get('/users/{id}', [NinjaController::class, 'show'])->name('users.show');
Route::post('/users', [NinjaController::class, 'store'])->name('users.store');
Route::delete('/users/{ninja}', [NinjaController::class, 'destroy'])->name('users.destroy'); // route model binding
