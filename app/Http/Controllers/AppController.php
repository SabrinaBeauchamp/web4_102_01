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

        $query = Entreprise::select('id', 'nom', "entreprises as model")
            ->where(function($query) use($request){
                $query->orWhere("nom", "LIKE", "%$request->q%");
                $query->orWhere("description", "LIKE", "%$request->q%");
            })
            ->orderBy('nom');
            
        if($groupes !== null && count($groupes) > 0)
        {
            $query->whereHas("categories", function($q) use($groupes){ 
                $q->whereIn("groupe_id", $groupes);
            });
        }
        $entreprises = $query->get();
        
        if($request->q === null || $groupes === null)
        {
            $entreprises = array();
        }
            
        return view("rechercheAvancee", ['resultats'=>$entreprises]);
    }
}
