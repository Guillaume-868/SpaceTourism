<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
        use HasFactory;
    
        // Autoriser les colonnes à être remplies en masse
        protected $fillable = [
            'home_fr',
            'home_en',
            'crew_fr',
            'crew_en'
        ];
    
    
        /**
         * Sélectionne uniquement les colonnes dans la langue courante
         */
        public static function selectLocalized()
        {
            $locale = app()->getLocale(); // 'fr' ou 'en'
    
            return self::select([
                'id',
                "home{$locale} as home", // ✅ correct
                "crew_{$locale} as crew",  
                'created_at',
                'updated_at',
            ]);
        }
    
    }
    
