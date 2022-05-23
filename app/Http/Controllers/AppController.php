<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Entreprise;
use App\Models\CategorieEntreprise;
use App\Models\Categorie;
use App\Models\Groupe;
use App\Models\Forfait;
use Illuminate\Http\Request;

class AppController extends Controller
{
    //Recherche de toute les tables importantes
    public function recherche(Request $request)
    {
        //Récupérer les données
        $entreprises = Entreprise::where("nom", "LIKE", "%$request->q%")
            ->select('id', 'nom', "entreprises as model")
            ->orderBy('nom')->get();
        $categories = Categorie::where("nom", "LIKE", "%$request->q%")
            ->select('id', 'nom', "categories as model")
            ->orderBy('nom')->get();
        $groupes = Groupe::where("nom", "LIKE", "%$request->q%")
            ->select('id', 'nom', "groupes as model")
            ->orderBy('nom')->get();
        $forfaits = Forfait::where("nom", "LIKE", "%$request->q%")
            ->select('id', 'nom', "forfaits as model")
            ->orderBy('nom')
            ->get();
        //Merge
        $resultat = $groupes
            ->merge($categories)
            ->merge($entreprises)
            ->merge($forfaits);
        return view("recherche", ['resultats'=>$resultat]);
    }

    //Recherche de seulement les entreprises
    //Recherche avancée
    public function rechercheEntreprises(Request $request)
    {
        $groupes = $request->groupes;
        var_dump($groupes);

        // $groupeAppartenance = Groupe::find($request->groupe);
        // $categoriesDuGroupe = Categorie::whereIn("groupe_id", $groupes)
        //     ->select('id', 'nom')
        //     ->get()
        //     ->pluck('id')
        //     ->toArray();

        // $entreprises = Entreprise::whereHas("categories", function($q) use($categoriesDuGroupe){ 
        //     $q->whereIn("categories.id", $categoriesDuGroupe);
        // })->get();
        $entreprises = Entreprise::whereHas("categories", function($q) use($groupes){ 
            $q->whereIn("groupe_id", $groupes);
        })
        ->where("nom", "LIKE", "%$request->q%")
        ->orWhere("description", "LIKE", "%$request->q%")
        ->get();
        //dd($entreprises);


        $entreprises = Entreprise::where("nom", "LIKE", "%$request->q%")
        //->orWhere me permet de récupéré à partir d'une autre columne
            ->select('id', 'nom', "entreprises as model")
            ->orderBy('nom')->get();
        return view("rechercheAvancee", ['resultats'=>$entreprises]);
    }
}
