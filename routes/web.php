<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CreativeAloneController;
use Illuminate\Http\Request;

Route::get('/inscription', ['uses' => RegisterController::class . '@showRegistrationForm', 'as' => 'register']);
Route::post('/inscription', ['uses' => RegisterController::class . '@create', 'as' => 'register.submit']);

Route::get('/profil/creativeralone', function () {
    return view('profilcreativealone');
})->name('profil.creative.alone');

Route::get('/creativealone/edit', ['uses' => CreativeAloneController::class . '@edit', 'as' => 'creative.alone.edit']);
Route::put('/creativealone/update', ['uses' => CreativeAloneController::class . '@update', 'as' => 'creative.alone.update']);

Auth::routes();

Route::get('/', function(){
    return view('home');
})->name('home');

Route::group(['prefix' => 'presentation'], function () {
    Route::get('/', function () {
        return view('presentation.index');
    })->name('presentation.index');

    Route::get('/agence', function () {
        return view('presentation.agence');
    })->name('presentation.agence');

    Route::get('/createur', function () {
        return view('presentation.createur');
    })->name('presentation.createur');

    Route::get('/entreprise', function () {
        return view('presentation.entreprise');
    })->name('presentation.entreprise');
});


Route::group(['prefix' => 'inscription'], function () {
    Route::get('/agence', function () {
        return view('inscription.agence');
    })->name('inscription.agence');

    Route::get('/entreprise', function () {
        return view('inscription.entreprise');
    })->name('inscription.entreprise');

    Route::get('/createur', function () {
        return view('inscription.createur');
    })->name('inscription.createur');
});

Route::get('/a-propos', function(){
    return view('a-propos.index');
})->name('a-propos');

Route::get('/ugc', function(){
    return view('ugc.index');
})->name('ugc');

Route::get('/contact', function(){
    return view('contact.index');
})->name('contact');