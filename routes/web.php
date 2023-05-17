<?php

use App\Http\Controllers\ReviewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeDashboard;
use App\Http\Controllers\DienstenController;
use App\Http\Controllers\AdvertisementController;

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('oppassen.dashboard');
})->middleware('auth');

Route::get('/registratie', function() {
    return view('auth.register');
})->name('registratie');

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/', [HomeDashboard::class, 'viewUser'])->name('dashboard.index')->middleware('auth');

//MijnAccount
Route::get('/account', [UserController::class, 'view'])->name('account-view')->middleware('auth');
Route::get('/account/bewerken', [UserController::class, 'edit'])->name('account-edit')->middleware('auth');
Route::put('/account/{user}', [UserController::class, 'update'])->middleware('auth');

//Show gebruiker gegevens
Route::get('/account/{user}/bekijken', [UserController::class, 'show'])->middleware('auth');

//post een review
Route::post('/review/{user}', [ReviewsController::class, 'store'])->middleware('auth');
//show de reviews van een gebruiker
Route::get('reviews/{user}/bekijken', [ReviewsController::class, 'show'])->middleware('auth');

//Show own advertisements
Route::get('/advertenties', [AdvertisementController::class, 'show'])->name('advertenties')->middleware('auth');
//edit single advertisement data
Route::get('/advertenties/{advertisements}/bewerken', [AdvertisementController::class, 'edit'])->middleware('auth');
//update advertisement
Route::put('advertenties/{advertisements}', [AdvertisementController::class, 'update'])->middleware('auth');
//Show requests from other users
Route::get('/advertenties/verzoeken', [AdvertisementController::class, 'showRequests'])->middleware('auth');
//Show create form
Route::get('/advertenties/aanmaken', [AdvertisementController::class, 'create'])->middleware('auth');
//Store advertisement data
Route::post('/advertenties', [AdvertisementController::class, 'store'])->middleware('auth');
//delete advertisement
Route::delete('/advertisements/{advertisements}', [AdvertisementController::class, 'destroy'])->middleware('auth');

//Diensten
Route::get('/diensten', [DienstenController::class, 'index'])->name('diensten')->middleware('auth');
Route::get('/diensten/opdrachten', [DienstenController::class, 'myRequests'])->middleware('auth');
Route::post('/diensten/{advertisements}', [DienstenController::class, 'request'])->middleware('auth');
//bekijk een advertentie van een andere gebruiker
Route::get('/advertenties/{advertisements}/bekijken', [DienstenController::class, 'details'])->middleware('auth');

//Accepteren van een verzoek
Route::put('/advertenties/{advertisements}/accepteren', [DienstenController::class, 'accept'])->middleware('auth');
//Afwijzen van een verzoek
Route::put('/advertenties/{advertisements}/afwijzen', [DienstenController::class, 'refuse'])->middleware('auth');

Route::fallback(function() {
    return view('components.page-not-found');
});