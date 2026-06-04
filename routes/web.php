<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [UserController::class, 'show']);
Route::get('/login', function () {
    return Inertia::render('Login');
});
