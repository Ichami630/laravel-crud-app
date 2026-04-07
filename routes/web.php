<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $users = [
        ["name" => "ichami", "skill" => 98, "id" => 1],
        ["name" => "john", "skill" => 85, "id" => 2],
        ["name" => "doe", "skill" => 90, "id" => 3],
    ];

    return view('users.index', ["greeting" => "Hello, welcome to the users page!", "users" => $users]);
});

Route::get('/users/{id}', function ($id) {
    // fetch record with id from db
    return view('users.show', ["userId" => $id]);
});
