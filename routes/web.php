<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CreativeAloneController;
// use App\Http\Controllers\CreateurController;
// use App\Http\Controllers\AgenceController;
use App\Http\Controllers\Admin\UgcController;
use App\Http\Controllers\Admin\EntrepriseController;
use App\Http\Controllers\Admin\CreateurController;
use App\Http\Controllers\Admin\AgenceController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\JobController as ControllersJobController;



use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

// Route::get('/inscription', ['uses' => RegisterController::class . '@showRegistrationForm', 'as' => 'register']);
// Route::post('/inscription', ['uses' => RegisterController::class . '@create', 'as' => 'register.submit']);
Route::get('/register', [RegisterController::class, "showRegistrationForm"])->name('register');
Route::post('/register', [RegisterController::class, "register"]);

Route::get('/profil/creativeralone', function () {
    return view('profilcreativealone');
})->name('profil.creative.alone');

Route::get('/creativealone/edit', ['uses' => CreativeAloneController::class . '@edit', 'as' => 'creative.alone.edit']);
Route::put('/creativealone/update', ['uses' => CreativeAloneController::class . '@update', 'as' => 'creative.alone.update']);


// Route::post('/createur/store', ['uses' => CreativeAloneController::class . '@store', 'as' => 'createur.store']);
// Route::post('/createur/update', ['uses' => CreativeAloneController::class . '@update', 'as' => 'createur.update']);
// Route::get('/createur/edit', ['uses' => CreativeAloneController::class . '@edit', 'as' => 'createur.edit']);

Route::prefix('createur')->group(function () {
    Route::get('/', [CreateurController::class, "index"])->name('createurs.index');
    Route::post('/store', [CreateurController::class, "store"])->name('createurs.store');
});


Route::prefix('agence')->group(function () {
    Route::get('/', [AgenceController::class, "index"])->name('agence.index');
    Route::post('/store', [AgenceController::class, "store"])->name('agence.store');
    Route::get('/{id}/edit', [AgenceController::class, "edit"])->name('agence.edit');
});




Route::get('/', function () {

    // $createur = Role::create(['name' => 'createur']);
    // $agence = Role::create(['name' => 'agence']);
    // $entreprise = Role::create(['name' => 'entreprise']);
    // $admin = Role::create(['name' => 'admin']);

    // $goToDashboard = Permission::create(['name' => 'go to dashboard']);
    // dump($goToDashboard);

    // $roleCreateur = Role::findById(1);
    // $roleAgence = Role::findById(2);
    // $roleEntreprise = Role::findById(3);

    // $roleCreateur->givePermissionTo('go to dashboard');
    // $roleAgence->givePermissionTo('go to dashboard');
    // $roleEntreprise->givePermissionTo('go to dashboard');

    // dump($roleCreateur->permissions);
    // dump($roleAgence->permissions);
    // dump($roleEntreprise->permissions);

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

Route::group(['prefix' => 'jobs'], function () {
    Route::resource('/', ControllersJobController::class)->only('index', 'create', 'store', 'edit')->names([
        'index' => 'front.jobs.index',
        'create' => 'front.jobs.create',
        'store' => 'front.jobs.store',
        'edit' => 'front.jobs.edit',
    ]);
    Route::get('/{slug}', [ControllersJobController::class, "show"])->name('jobs.single');
});

Route::get('/a-propos', function () {
    return view('a-propos.index');
})->name('a-propos');

Route::get('/ugc', function () {
    return view('ugc.index');
})->name('ugc');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

Route::get('/tarifs', function () {
    return view('tarifs.index');
})->name('tarifs');

Route::group(['prefix' => 'dashboard'], function () {
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/', function () {
            return view('dashboard');
        })->name('dashboard');
       
        Route::post('entreprises/{id}/update', [EntrepriseController::class, "update"])->name('entreprises.update');
        Route::get('entreprises/{id}/destroy', [EntrepriseController::class, "destroy"])->name('entreprises.destroy');
        Route::resource('entreprises', EntrepriseController::class)->only('index', 'create', 'store', 'edit');

        Route::post('ugcs/{id}/update', [UgcController::class, "update"])->name('ugcs.update');
        Route::get('ugcs/{id}/destroy', [UgcController::class, "destroy"])->name('ugcs.destroy');
        Route::resource('ugcs', UgcController::class)->only('index', 'create', 'store', 'edit');

        Route::post('createurs/{id}/update', [CreateurController::class, "update"])->name('createur.update');
        Route::get('createurs/{id}/destroy', [CreateurController::class, "destroy"])->name('createur.destroy');
        Route::resource('createur', CreateurController::class)->only('index', 'create', 'store', 'edit');

        Route::post('agences/{id}/update', [AgenceController::class, "update"])->name('agence.update');
        Route::get('agences/{id}/destroy', [AgenceController::class, "destroy"])->name('agence.destroy');
        Route::resource('agence', AgenceController::class)->only('index', 'create', 'store', 'edit');

        Route::post('jobs/{id}/update', [JobController::class, "update"])->name('jobs.update');
        Route::get('jobs/{id}/destroy', [JobController::class, "destroy"])->name('jobs.destroy');
        Route::resource('jobs', JobController::class)->only('index', 'create', 'store', 'edit');
    });
})->middleware('auth')->name('login');