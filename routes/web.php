<?php

use App\Http\Controllers\WorkSpaceController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\callback;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Space/Planets/space', function(){
    return view('Space/Planets/space');

})->name('space');

Route::get('/Space/Planets/moon', function(){
    return view('Space/Planets/moon');

})->name('moon');

Route::get('/Space/Planets/mars', function(){
    return view('Space/Planets/mars');

})->name('mars');


Route::get('/Space/Crew/commandant', function(){
    return view('Space/Crew/commandant');

})->name('commandant');


Route::get('/Space/Starships/launcher', function(){
    return view('/Space/Starships/launcher');

})->name('launcher');


// Route::controller(WorkSpaceController::class)->group(function () {

//     // CREW
//     Route::get('/Space/Crew/commandant','index');
//     Route::get('/Space/Crew/commandant','create');
//     Route::get('/Space/Crew/commandant/{id}','show');
//     Route::post('/Space/Crew/commandant','store');
//     Route::get('/Space/Crew/commandant/{id}','edit');
//     Route::post('/Space/Crew/commandant/{id}','update');
//     Route::get('/Space/Crew/commandant/{id}','delete');

//     Route::get('/Space/Crew/ingenieure','index');
//     Route::get('/Space/Crew/ingenieure','create');
//     Route::get('/Space/Crew/ingenieure/{id}','show');
//     Route::post('/Space/Crew/ingenieure','store');
//     Route::get('/Space/Crew/ingenieure/{id}','edit');
//     Route::post('/Space/Crew/ingenieure/{id}','update');
//     Route::get('/Space/Crew/ingenieure/{id}','delete');

//     Route::get('/Space/Crew/pilote','index');
//     Route::get('/Space/Crew/pilote','create');
//     Route::get('/Space/Crew/pilote/{id}','show');
//     Route::post('/Space/Crew/pilote','store');
//     Route::get('/Space/Crew/pilote/{id}','edit');
//     Route::post('/Space/Crew/pilote/{id}','update');
//     Route::get('/Space/Crew/pilote/{id}','delete');

//     Route::get('/Space/Crew/specialiste','index');
//     Route::get('/Space/Crew/specialiste','create');
//     Route::get('/Space/Crew/specialiste/{id}','show');
//     Route::post('/Space/Crew/specialiste','store');
//     Route::get('/Space/Crew/specialiste/{id}','edit');
//     Route::post('/Space/Crew/specialiste/{id}','update');
//     Route::get('/Space/Crew/specialiste/{id}','delete');

//     // Planets
//     Route::get('/Space/Planets/europe','index');
//     Route::get('/Space/Planets/europe','create');
//     Route::get('/Space/Planets/europe/{id}','show');
//     Route::post('/Space/Planets/europe','store');
//     Route::get('/Space/Planets/europe/{id}','edit');
//     Route::post('/Space/Planets/europe/{id}','update');
//     Route::get('/Space/Planets/europe/{id}','delete');
   
//     Route::get('/Space/Planets/mars','index');
//     Route::get('/Space/Planets/mars','create');
//     Route::get('/Space/Planets/mars/{id}','show');
//     Route::post('/Space/Planets/mars','store');
//     Route::get('/Space/Planets/mars/{id}','edit');
//     Route::post('/Space/Planets/mars/{id}','update');
//     Route::get('/Space/Planets/mars/{id}','delete');

//     Route::get('/Space/Planets/moon','index');
//     Route::get('/Space/Planets/moon','create');
//     Route::get('/Space/Planets/moon/{id}','show');
//     Route::post('/Space/Planets/moon','store');
//     Route::get('/Space/Planets/moon/{id}','edit');
//     Route::post('/Space/Planets/moon/{id}','update');
//     Route::get('/Space/Planets/moon/{id}','delete');

   
//     Route::get('/Space/Planets/space','index');
//     Route::get('/Space/Planets/space','create');
//     Route::get('/Space/Planets/space/{id}','show');
//     Route::post('/Space/Planets/space','store');
//     Route::get('/Space/Planets/space/{id}','edit');
//     Route::post('/Space/Planets/space/{id}','update');
//     Route::get('/Space/Planets/space/{id}','delete');

//     Route::get('/Space/Planets/titan','index');
//     Route::get('/Space/Planets/titan','create');
//     Route::get('/Space/Planets/titan/{id}','show');
//     Route::post('/Space/Planets/titan','store');
//     Route::get('/Space/Planets/titan/{id}','edit');
//     Route::post('/Space/Planets/titan/{id}','update');
//     Route::get('/Space/Planets/titan/{id}','delete');

//     // Starships
//     Route::get('/Space/Starships/launcher','index');
//     Route::get('/Space/Starships/launcher','create');
//     Route::get('/Space/Starships/launcher/{id}','show');
//     Route::post('/Space/Starships/launcher','store');
//     Route::get('/Space/Starships/launcher/{id}','edit');
//     Route::post('/Space/Starships/launcher/{id}','update');
//     Route::get('/Space/Starships/launcher/{id}','delete');

    
//     Route::get('/Space/Starships/spaceCapsule','index');
//     Route::get('/Space/Starships/spaceCapsule','create');
//     Route::get('/Space/Starships/spaceCapsule/{id}','show');
//     Route::post('/Space/Starships/spaceCapsule','store');
//     Route::get('/Space/Starships/spaceCapsule/{id}','edit');
//     Route::post('/Space/Starships/spaceCapsule/{id}','update');
//     Route::get('/Space/Starships/spaceCapsule/{id}','delete');

    
//     Route::get('/Space/Starships/starport','index');
//     Route::get('/Space/Starships/starport','create');
//     Route::get('/Space/Starships/starport/{id}','show');
//     Route::post('/Space/Starships/starport','store');
//     Route::get('/Space/Starships/starport/{id}','edit');
//     Route::post('/Space/Starships/starport/{id}','update');
//     Route::get('/Space/Starships/starport/{id}','delete');

// });
