<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\Reinsurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReinsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reinsurances = Reinsurance::orderBy('ordre')->get();
        $settings = Settings::find(1);
        return view('reinsurances.index', compact('reinsurances', 'settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $settings = Settings::find(1);
        if (Reinsurance::all()->count() >= $settings->nombre_elements) {
            Session::flash('AlertMessage', "Vous avez atteint la limite d'éléments autorisés");
            Session::flash('AlertType', "danger");
            return redirect()->back();
        }
        $position = 0;
        $reinsurances = Reinsurance::orderBy('ordre')->get();
        foreach ($reinsurances as $key => $item) {
            if ($item->ordre != $key + 1) {
                $position = $key + 1;
                break;
            }
        }
        if ($position == 0) {
            $position = Reinsurance::max('ordre') + 1;
        }
        $file = $request->file('icone');
        if (!empty($file)) {
            if (!in_array($file->extension(), ['jpeg', 'jpg', 'png'])) {
                Session::flash('AlertMessage', "Le format de l'image n'est pas pris en charge");
                Session::flash('AlertType', "danger");
                return redirect()->back();
            }
            if($file->getSize() > 1048576) {
                Session::flash('AlertMessage', "La taille de l'image ne doit pas dépasser 1mb");
                Session::flash('AlertType', "danger");
                return redirect()->back();
            }
            $path = 'storage/'. $file->store('images');
        }
        else {
            $path = 'storage/images/no_img.png';
        }
        Reinsurance::create([
            'libelle' => $request->libelle,
            'description' => $request->description,
            'icone' => $path,
            'alt' => $request->alt,
            'statut' => empty($request->statut) ? 0 : 1,
            'ordre' => $position,
            'lien' => $request->lien,
            'title_lien' => $request->title_lien,
            'new_tab' => empty($request->new_tab) ? 0 : 1,
        ]);
        Session::flash('AlertMessage', "L'élément a été créé avec succès");
        Session::flash('AlertType', "success");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reinsurance = Reinsurance::find($id);
        $settings = Settings::find(1);
        return view('reinsurances.edit', compact('reinsurance', 'settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $reinsurance = Reinsurance::find($id);       
        $file = $request->file('icone');
        if (!empty($file)) {
            if (!in_array($file->extension(), ['jpeg', 'jpg', 'png'])) {
                Session::flash('AlertMessage', "Le format de l'image n'est pas pris en charge");
                Session::flash('AlertType', "danger");
                return redirect()->back();
            }
            if($file->getSize() > 1048576) {
                Session::flash('AlertMessage', "La taille de l'image ne doit pas dépasser 1mb");
                Session::flash('AlertType', "danger");
                return redirect()->back();
            }
            $path = 'storage/'. $file->store('images');
        }
        else {
            $path = $reinsurance->icone;
        }
        $reinsurance->libelle = $request->libelle;
        $reinsurance->description = $request->description;
        $reinsurance->icone = $path;
        $reinsurance->alt = $request->alt;
        $reinsurance->statut = empty($request->statut) ? 0 : 1;
        $reinsurance->lien = $request->lien;
        $reinsurance->title_lien = $request->title_lien;
        $reinsurance->new_tab = empty($request->new_tab) ? 0 : 1;
        $reinsurance->save();
        
        Session::flash('AlertMessage', "L'élément a été mis à jour avec succès");
        Session::flash('AlertType', "success");
        return redirect()->route('reinsurances.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reinsurance = Reinsurance::find($id);
        $reinsurance->delete();
        Session::flash('AlertMessage', "L'élément a été supprimé avec succès");
        Session::flash('AlertType', "success");
        return redirect()->back();
    }

    public function updatePositions(Request $request) 
    {
        foreach ($request->position_logs as $position_log) {
            $reinsurance = Reinsurance::find($position_log[0]);
            $reinsurance->ordre = $position_log[1];
            $reinsurance->save();
        }
        $json = array(
            "success" => "Database successfully updated."
        );
        return json_encode($json);
    }
}
