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

Route::get('/compte', function(){
    return view('compte.index');
});

Route::get('/compte/agence', function(){
    return view('compte.agence');
});

Route::get('/inscription/agence', function(){
    return view('inscription.agence');
});

Route::get('/inscription/entreprise', function(){
    return view('inscription.entreprise');
});

Route::get('/inscription/createur', function(){
    return view('inscription.createur');
});
