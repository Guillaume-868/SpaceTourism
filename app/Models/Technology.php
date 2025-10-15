<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    /** @use HasFactory<\Database\Factories\TechnologysFactory> */
    use HasFactory;

      // Autoriser les colonnes à être remplies en masse
      protected $fillable = [
        'starships_fr',
        'starships_en',
        'description_fr',
        'description_en'
    ];
}
