<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\PropertiesController;
use App\Http\Controllers\Api\PostsController;
use App\Http\Controllers\Api\SettingsController;
use App\Http\Controllers\Api\AdsController;
use App\Http\Controllers\Api\CompaniesController;


// Authentication Routes
Route::post('/users/register', [UsersController::class, 'register']);
Route::post('/users/login', [UsersController::class, 'login']);
Route::post('/users/logout', [UsersController::class, 'logoutUser'])->middleware('auth:sanctum');
Route::delete('/users/{id}', [UsersController::class, 'deleteUser'])->middleware('auth:sanctum');


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Property Routes
Route::get('/properties', [PropertiesController::class, 'index']);
// Route::get('/properties/{id}', [PropertiesController::class, 'show']);
Route::post('/properties', [PropertiesController::class, 'store']);
Route::put('/properties/{id}', [PropertiesController::class, 'update']);
Route::delete('/properties/{id}', [PropertiesController::class, 'destroy']);
Route::get('/properties-agency/{agencyId}', [PropertiesController::class, 'fetchPropertiesForAgency']);
Route::get('/properties/search', [PropertiesController::class, 'search']);

Route::post('/properties/filter', [PropertiesController::class, 'filter']);

Route::get('/property-types', [PropertiesController::class, 'getPropertyTypes']);
Route::get('/property-statuses', [PropertiesController::class, 'getPropertyStatuses']);
Route::get('/states', [PropertiesController::class, 'getStates']);
Route::get('/agencies', [PropertiesController::class, 'getAgencies']);



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


