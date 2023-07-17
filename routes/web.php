<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contact', [EventController::class, 'contact']);

Route::get('/products', [EventController::class, 'products']);

Route::get('/products/{id}', [EventController::class, 'product']);
