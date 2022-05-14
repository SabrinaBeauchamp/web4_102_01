<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class AppController extends Controller
{
    //Recherche de toute les tables
    public function recherche(Request $request)
    {
        $entreprises = Entreprise::where("nom", "LIKE", "%$request->q%")
            ->select('id', 'nom', "entreprises as model")
            ->get();
        $categories = Entreprise::where("nom", "LIKE", "%$request->q%")
            ->select('id', 'nom', "categories as model")
            ->union($entreprises)
            ->get();
        $groupes = Entreprise::where("nom", "LIKE", "%$request->q%")
            ->select('id', 'nom', "groupes as model")
            ->union($entreprises)
            ->orderBy('nom')
            ->get();
        return view("recherche", ['resultats'=>$entreprises]);
    }

    //Recherche de seulement les entreprises
    public function entreprise(Request $request)
    {
        $entreprises = Entreprise::where("nom", "LIKE", "%$request->q%")
        //->orWhere me permet de récupéré à partir d'une autre columne
            ->select('id', 'nom', "entreprises as model")
            ->orderBy('nom')->get();
        return view("recherche", ['resultats'=>$entreprises]);
    }
}
