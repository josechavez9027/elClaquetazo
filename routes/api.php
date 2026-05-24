<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Models\Movie;


Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/{id}', [MovieController::class, 'show']);
Route::post('/movies', [MovieController::class, 'store']);
Route::put('/movies/{id}', [MovieController::class, 'update']);
Route::delete('/movies/{id}', [MovieController::class, 'destroy']);