<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrosController;

Route::get('/carros', [CarrosController::class, 'index']);
