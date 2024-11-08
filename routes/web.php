<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;

Route::get('/', [PostController::class, 'index']);
Route::get('/events/create', [EventController::class, 'index']);
