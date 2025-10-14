<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    // Autoriser les colonnes à être remplies en masse
    protected $fillable = [
        'name_fr',
        'name_en',
        'description_fr',
        'description_en',
        'distance_fr',
        'distance_en',
        'duration_fr',
        'duration_en',
    ];
}