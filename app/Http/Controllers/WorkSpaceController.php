<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use App\Models\Planet;
use App\Models\Technology;

class WorkSpaceController extends Controller
{

    // Home
    public function showHome()
    {
        return view('Space.Planets.space');
    }

    // Planets
    public function showPlanets()
    {
        return view('Space.Planets');
    }

    
    public function showCrews()
    {
        return view('Space.Crew');
    }

    
    public function showTechnologies()
    {
        return view('Space.Starships');
    }





    // Planets
    public function showPlanet($id)
    {
        $planet = Planet::selectLocalized()->findOrFail($id);
        // $planet = Planet::findOrFail($id);

        // var_dump($planet);
        // exit;

        // dd($planet->toArray());

        return view('Space.Planets.moon', compact('planet'));
    }

    // Crew / Equipage
    public function showCrew($id)
    {
        $crew = Crew::selectLocalized()->findOrFail($id);

        // var_dump($crew);
        // exit;
        return view('Space.Crew.commandant', compact('crew'));
    }

    // Technology / Technologies
    public function showTechnology($id)
    {
        $technology = Technology::selectLocalized()->findOrFail($id);

        return view('Space.Starships.launcher', compact('technology'));
    }
}
