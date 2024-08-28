<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertiesController;



Route::get('/', function (Request $request) {
    return view('index');
});

Route::get('/users', function (Request $request) {
    return view('users');
});


// Resource routes for PropertiesController
Route::resource('/properties', PropertiesController::class);


Route::get('/starter', function (Request $request) {
    return view('starter');
});

// Route::get('/login', function (Request $request) {
//     return view('login');
// });

Route::get('/properties/create', function (Request $request) {
    return view('properties.create');
});


Route::get('/index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


