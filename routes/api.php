<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\PropertiesController;
use App\Http\Controllers\Api\PostsController;
use App\Http\Controllers\Api\SettingsController;
use App\Http\Controllers\Api\AdsController;
use App\Http\Controllers\Api\CompaniesController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// User Routes
Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/{id}', [UsersController::class, 'show']);
Route::post('/users', [UsersController::class, 'store']);
Route::put('/users/{id}', [UsersController::class, 'update']);
Route::delete('/users/{id}', [UsersController::class, 'destroy']);

// Property Routes
Route::get('/properties', [PropertiesController::class, 'index']);
Route::get('/properties/{id}', [PropertiesController::class, 'show']);
Route::post('/properties', [PropertiesController::class, 'store']);
Route::put('/properties/{id}', [PropertiesController::class, 'update']);
Route::delete('/properties/{id}', [PropertiesController::class, 'destroy']);
Route::get('/properties-agency/{agencyId}', [PropertiesController::class, 'fetchPropertiesForAgency']);
Route::post('/properties/filter', [PropertiesController::class, 'filter'])->name('properties.filter');


// Post Routes
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/{id}', [PostsController::class, 'show']);
Route::post('/posts', [PostsController::class, 'store']);
Route::put('/posts/{id}', [PostsController::class, 'update']);
Route::delete('/posts/{id}', [PostsController::class, 'destroy']);

// Settings Routes
Route::get('/settings', [SettingsController::class, 'index']);
Route::put('/settings', [SettingsController::class, 'update']);

// Ads Routes
Route::get('/ads', [AdsController::class, 'index']);


// companies Routes
Route::get('/companies', [CompaniesController::class, 'index']);

Route::get('/categories', [CompaniesController::class, 'fetchCategory']);

Route::get('/companies/{categoryId}', [CompaniesController::class, 'fetchCompaniesCategory']);


