<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreativeAloneController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/inscription/creativealone', ['uses' => CreativeAloneController::class . '@store', 'as' => 'inscription.store']);

Route::get('/inscription', function () {
    return view('creativealonestore');
});

Route::get('/salut', function () {
    return view('salut');
})->name('salut');
