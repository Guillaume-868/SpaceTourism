<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use App\Models\Planet;
use App\Models\Technology;

class WorkSpaceController extends Controller
{

    public function showPlanet($id)
    {
        $planet = Planet::selectLocalized()->findOrFail($id);
        // $planet = Planet::findOrFail($id);

        // var_dump($planet->description);
        // exit;

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

