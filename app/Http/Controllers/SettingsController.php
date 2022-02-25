<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    public function update(Request $request)
    {
        $settings = Settings::find(1);
        if (!$settings) {
            Settings::create([
                "nombre_elements" => $request->n_elements,
                "largeur_icone" => $request->width,
                "hauteur_icone" => $request->height,
            ]);
        }
        else {
            $settings->nombre_elements = $request->n_elements;
            $settings->largeur_icone = $request->width;
            $settings->hauteur_icone = $request->height;
            $settings->save();
        }
        Session::flash('AlertMessage', "Les modifications ont été appliquées");
        Session::flash('AlertType', "success");
        return redirect()->back();
    }
}
