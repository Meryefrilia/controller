<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DosenController::class, 'index']);