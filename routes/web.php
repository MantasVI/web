<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\FavoriteController;
use App\Http\Middleware\AdminMiddleware;
// Auth routes
Route::get('/', function() {
    return redirect('/signup');
});

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
Route::get('/favorites', [FavoriteController::class, 'favorites']);
Route::post('/favorites/add', [FavoriteController::class, 'add']);
Route::delete('/favorites/remove', [FavoriteController::class, 'remove']);
});



Route::middleware(['auth', 'admin'])->group(function() {
    
    Route::get('/admin', [ContentController::class, 'adminIndex']);
    Route::get('/admin/create', [ContentController::class, 'adminCreate']);
     Route::get('/admin/redirect', [ContentController::class, 'adminRedirect']);
    Route::post('/admin/store', [ContentController::class, 'adminStore']);
    Route::get('/admin/edit/{id}', [ContentController::class, 'adminEdit']);
    Route::put('/admin/update/{id}', [ContentController::class, 'adminUpdate']);
    Route::delete('/admin/delete/{id}', [ContentController::class, 'adminDestroy']);
});



