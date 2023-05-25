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

Route::middleware('auth')->group(function() {
    Route::get('/', [HomeDashboard::class, 'viewUser'])->name('dashboard.index');

    //MijnAccount
    Route::get('/account', [UserController::class, 'view'])->name('account-view');
    Route::get('/account/bewerken', [UserController::class, 'edit'])->name('account-edit');
    Route::put('/account/{user}', [UserController::class, 'update']);

    //Show gebruiker gegevens
    Route::get('/account/{user}/bekijken', [UserController::class, 'show']);

    //post een review
    Route::post('/review/{user}', [ReviewsController::class, 'store']);
    //show de reviews van een gebruiker
    Route::get('reviews/{user}/bekijken', [ReviewsController::class, 'show']);

    //Show own advertisements
    Route::get('/advertenties', [AdvertisementController::class, 'show'])->name('advertenties');
    //edit single advertisement data
    Route::get('/advertenties/{advertisements}/bewerken', [AdvertisementController::class, 'edit']);
    //update advertisement
    Route::put('advertenties/{advertisements}', [AdvertisementController::class, 'update']);
    //Show requests from other users
    Route::get('/advertenties/verzoeken', [AdvertisementController::class, 'showRequests']);
    //Show create form
    Route::get('/advertenties/aanmaken', [AdvertisementController::class, 'create']);
    //Store advertisement data
    Route::post('/advertenties', [AdvertisementController::class, 'store']);
    //delete advertisement
    Route::delete('/advertisements/{advertisements}', [AdvertisementController::class, 'destroy']);

    //Diensten
    Route::get('/diensten', [DienstenController::class, 'index'])->name('diensten');
    Route::get('/diensten/opdrachten', [DienstenController::class, 'myRequests']);
    Route::post('/diensten/{advertisements}', [DienstenController::class, 'request']);
    //bekijk een advertentie van een andere gebruiker
    Route::get('/advertenties/{advertisements}/bekijken', [DienstenController::class, 'details']);

    //Accepteren van een verzoek
    Route::put('/advertenties/{advertisements}/accepteren', [DienstenController::class, 'accept']);
    //Afwijzen van een verzoek
    Route::put('/advertenties/{advertisements}/afwijzen', [DienstenController::class, 'refuse']);
});

Route::fallback(function() {
    return view('components.page-not-found');
});