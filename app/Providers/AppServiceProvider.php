<?php

namespace App\Providers;

use App\Models\Settings;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(empty(Settings::find(1))) {
            Settings::create([
                'nombre_elements' => 10,
                'hauteur_icone' => 50,
                'largeur_icone' => 50
            ]);
        }
    }
}
