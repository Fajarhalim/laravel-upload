<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/profile', 'profile');

Route::post('/submit-profile', [ProfileController::class, 'submit']);