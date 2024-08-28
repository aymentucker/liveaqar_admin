<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PropertyStatusController;




// Route::get('/users', function (Request $request) {
//     return view('users');
// });



Route::get('/starter', function (Request $request) {
    return view('starter');
});

// Route::get('/login', function (Request $request) {
//     return view('login');
// });

// Route::get('/properties/create', function (Request $request) {
//     return view('properties.create');
// });


Route::get('/index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //  route for index page
    Route::get('/', function (Request $request) {
        return view('index');
    });

    // Resource routes for UsersController
    Route::resource('/users', UsersController::class);


    // Resource routes for PropertiesController
    Route::resource('/property-status', PropertyStatusController::class);


    // Resource routes for PropertiesController
    Route::resource('/properties', PropertiesController::class);


});

require __DIR__ . '/auth.php';


