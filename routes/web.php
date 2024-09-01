<?php

use App\Http\Controllers\AgenciesController;
use App\Http\Controllers\AgentsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PropertyStatusController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PropertyTypesController;
use App\Http\Controllers\PropertyFeaturesController;
use App\Http\Controllers\CityStateController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\AdsController;




Route::get('/starter', function (Request $request) {
    return view('starter');
});


// Resource routes for UsersController
Route::resource('/users', UsersController::class);


// Resource routes for PropertiesController
Route::resource('/property-status', PropertyStatusController::class);


// Resource routes for PropertiesController
Route::resource('/properties', PropertiesController::class);

// Resource routes for CategoriesController
Route::resource('/categories', CategoriesController::class);

// Resource routes for PropertyTypesController
Route::resource('/property-types', PropertyTypesController::class);

// Resource routes for FeatureController
Route::resource('/property-features', PropertyFeaturesController::class);

// Resource routes for CommentsController
Route::resource('/comments', CommentsController::class);


// Resource routes for Ads
Route::resource('/ads', AdsController::class);

// Resource routes for Partners
Route::resource('/partners', PartnerController::class);


// Resource routes for Posts
Route::resource('/posts', PostsController::class);


// Resource routes for ReviewsController
Route::resource('/reviews', ReviewsController::class);


// Resource routes for AgentsController
Route::resource('/agents', AgentsController::class);

// Resource routes for AgenciesController
Route::resource('/agencies', AgenciesController::class);



// Resource routes for CityStateController => City
Route::controller(CityStateController::class)->group(function () {
    Route::get('/cities', 'indexCity')->name('cities.index');
    Route::post('/cities', 'storeCity')->name('cities.store');
    Route::put('/cities/{city}', 'updateCity')->name('cities.update');
    Route::delete('/cities/{city}', 'destroyCity')->name('cities.destroy');
});
// Resource routes for CityStateController => State
Route::controller(CityStateController::class)->group(function () {
    Route::get('/states', 'indexState')->name('states.index');
    Route::post('/states', 'storeState')->name('states.store');
    Route::put('/states/{city}', 'updateState')->name('states.update');
    Route::delete('/states/{city}', 'destroyState')->name('states.destroy');

});

// Get route for getStatesForCity
Route::get('/states-for-city/{cityId}', [CityStateController::class, 'getStatesForCity']);




Route::get('/', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');


// // Routes for authenticated users
// Route::middleware(['auth'])->group(function () {

//     // Profile routes
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


//     // Resource routes for UsersController
//     Route::resource('/users', UsersController::class);

//     // Resource routes for PropertyStatusController
//     Route::resource('/property-status', PropertyStatusController::class);

//     // Resource routes for PropertiesController
//     Route::resource('/properties', PropertiesController::class);

//     // Resource routes for CategoriesController
//     Route::resource('/categories', CategoriesController::class);

//     // Resource routes for PropertyTypesController
//     Route::resource('/property-types', PropertyTypesController::class);

//     // Resource routes for PropertyFeaturesController
//     Route::resource('/property-features', PropertyFeaturesController::class);

//     // Resource routes for CommentsController
//     Route::resource('/comments', CommentsController::class);

//     // Resource routes for AdsController
//     Route::resource('/ads', AdsController::class);

//     // Resource routes for PartnersController
//     Route::resource('/partners', PartnerController::class);

//     // Resource routes for PostsController
//     Route::resource('/posts', PostsController::class);

//     // Resource routes for ReviewsController
//     Route::resource('/reviews', ReviewsController::class);

//     // Resource routes for AgentsController
//     Route::resource('/agents', AgentsController::class);

//     // Resource routes for AgenciesController
//     Route::resource('/agencies', AgenciesController::class);

//     // City and State routes using CityStateController
//     Route::controller(CityStateController::class)->group(function () {
//         // City routes
//         Route::get('/cities', 'indexCity')->name('cities.index');
//         Route::post('/cities', 'storeCity')->name('cities.store');
//         Route::put('/cities/{city}', 'updateCity')->name('cities.update');
//         Route::delete('/cities/{city}', 'destroyCity')->name('cities.destroy');

//         // State routes
//         Route::get('/states', 'indexState')->name('states.index');
//         Route::post('/states', 'storeState')->name('states.store');
//         Route::put('/states/{state}', 'updateState')->name('states.update');
//         Route::delete('/states/{state}', 'destroyState')->name('states.destroy');
//     });

//     // Get route for fetching states by city
//     Route::get('/states-for-city/{cityId}', [CityStateController::class, 'getStatesForCity']);
// });

// //  route for index page
// Route::get('/', function (Request $request) {
//     return view('index');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




});

require __DIR__ . '/auth.php';


