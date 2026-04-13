<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\FavoriteController;

// Auth routes
Route::get('/signup', [AuthController::class, 'showSignup']);
Route::post('/signup', [AuthController::class, 'signup']);
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// Content routes
Route::middleware('auth')->group(function (){
    
Route::get('/home', [ContentController::class, 'home']);
Route::get('/movies', [ContentController::class, 'movies']);
Route::get('/series', [ContentController::class, 'series']);

// Favorites routes
Route::get('/favorites', [FavoriteController::class, 'index']);
Route::post('/favorites/add', [FavoriteController::class, 'add']);
Route::delete('/favorites/remove', [FavoriteController::class, 'remove']);
});



