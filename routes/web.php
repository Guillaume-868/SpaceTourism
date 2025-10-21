<?php

// ✅ Utiliser le bon contrôleur
use App\Http\Controllers\WorkSpaceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Exemple sans controller
Route::get('/Space/Planets/space', function () {
    return view('Space.Planets.space');
})->name('space');


Route::controller(WorkSpaceController::class)->group(function () {

    // Pages globales
    Route::get('/Space/Planets/space', [WorkSpaceController::class, 'showHome'])->name('home');
    Route::get('/Space/Planets/', [WorkSpaceController::class, 'showPlanets'])->name('planets');
    Route::get('/Space/Crew/', [WorkSpaceController::class, 'showCrews'])->name('crews');
    Route::get('/Space/Technologies/', [WorkSpaceController::class, 'howTechnologies'])->name('technologies');

    // Routes associees à mon Controller WorkSpaceController
    // Planets
    Route::get('/Space/Planets/{id}', [WorkSpaceController::class, 'showPlanet'])->name('planet');
    Route::get('/Space/Planets/{id}', [WorkSpaceController::class, 'showPlanet'])->name('description');
    Route::get('/Space/Planets/{id}', [WorkSpaceController::class, 'showPlanet'])->name('distance');
    Route::get('/Space/Planets/{id}', [WorkSpaceController::class, 'showPlanet'])->name('duration');
    Route::get('/Space/Planets/{id}', [WorkSpaceController::class, 'showPlanet'])->name('choose_Destination');

    // Crew / Equipage
    Route::get('/Space/Crew/{id}', [WorkSpaceController::class, 'showCrew'])->name('crew');
    Route::get('/Space/Crew/{id}', [WorkSpaceController::class, 'showCrew'])->name('description_Crew');

    // Technology / Technologies
    Route::get('/Space/Starships/{id}', [WorkSpaceController::class, 'showTechnology'])->name('technology');
    Route::get('/Space/Starships/{id}', [WorkSpaceController::class, 'showTechnology'])->name('subtitle');
    Route::get('/Space/Starships/{id}', [WorkSpaceController::class, 'showTechnology'])->name('description_Technology');
});

// Gestion de la langue
Route::post('/change-locale', function (Illuminate\Http\Request $request) {
    $locale = $request->input('locale');

    if (in_array($locale, ['en', 'fr', 'it'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale); // pour la requête en cours
    }

    return response()->json(['status' => 'ok']);
})->name('locale.change');










