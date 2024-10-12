<?php

use Illuminate\Support\Facades\Route;

Route::get('blogs', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('errors', [App\Http\Controllers\HomeController::class, 'errors']);
