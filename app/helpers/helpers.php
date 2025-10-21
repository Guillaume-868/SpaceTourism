<?php

use Illuminate\Support\Facades\App;

if (!function_exists('nav_items')) {
    function nav_items(): array
    {
        return [
            [
                'label' => __('nav.home'),
                'route' => route('home'),
            ],
            [
                'label' => __('nav.destination'),
                'route' => route('planets'),
            ],
            [
                'label' => __('nav.crew'),
                'route' => route('crews'),
            ],
            [
                'label' => __('nav.technologies'),
                'route' => route('technologies'),
            ],
        ];
    }
}