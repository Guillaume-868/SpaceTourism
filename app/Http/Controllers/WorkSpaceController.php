<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use App\Models\Crew;
use App\Models\Technology;

class WorkSpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // public function infos()
    // {
    //     $planets = Planet::all(); // récupère toutes les planètes
    //     return view('planets.index', compact('planets'));
    // }

    // public function select()
    // {
    //     // Récupérer uniquement certaines colonnes
    //     $planet = Planet::select([
    //         'name_fr',
    //         'distance_fr',
    //         'duration_fr',
    //     ])->get();

    //     return view('planets.index', compact('planet'));
    // }


// Dry / Méthode réutilisable // Planets


// Planets

    public function planet($id)
{
    // Récupérer la planète par son ID
    $planet = Planet::findOrFail($id);

    // Passer la donnée à la vue
    return view('Space.Planets.moon', compact('planet'));
}

public function description($id)
{
    // Récupérer la planète par son ID
    $planet = Planet::findOrFail($id);

    // Passer la donnée à la vue
    return view('Space.Planets.moon', compact('planet'));
}

public function distance($id)
{
    // Récupérer la planète par son ID
    $planet = Planet::findOrFail($id);

    // Passer la donnée à la vue
    return view('Space.Planets.moon', compact('planet'));
}


public function duration($id)
{
    // Récupérer la planète par son ID
    $planet = Planet::findOrFail($id);

    // Passer la donnée à la vue
    return view('Space.Planets.moon', compact('planet'));
}

public function choose_Destination($id)
{
    // Récupérer la planète par son ID
    $planet = Planet::findOrFail($id);

    // Passer la donnée à la vue
    return view('Space.Planets.moon', compact('planet'));
}


// Crew / Equipage

public function crew($id)
{
    
    $crew = Crew::findOrFail($id);

    return view('Space.Crew.commandant', compact('crew'));
}

// Crew / Equipage

public function description_Crew($id)
{
   
    $crew = Crew::findOrFail($id);

    return view('Space.Crew.commandant', compact('crew'));
}

// Technology / Technologies

public function technology($id)
{
    
    $technology = Technology::findOrFail($id);

    return view('Space.Starships.launcher', compact('technology'));
}

public function description_Technology($id)
{
    
    $technology = Technology::findOrFail($id);

    return view('Space.Starships.launcher', compact('technology'));
}


public function subtiltle($id)
{
    
    $technology = Technology::findOrFail($id);

    return view('Space.Starships.launcher', compact('technology'));
}


}
