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
    //N'est plus utilisé dans le projet
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
        //Récupéré les entreprises selon les groupes selectionnés et la recherche
        $groupes = $request->groupes;

        $query = Entreprise::select('id', 'nom', "entreprises as model", 'populaire')
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
        
        //Si il n'a pas fait de recherche ou de sélection
        //Il retourne un tableau vide
        if($request->q === null || $groupes === null)
        {
            $entreprises = array();
        }

        //Si il veux les entreprises populaires
        if($request->entreprises_populaires !== null)
        {
            foreach($entreprises as $entrepriseId => $entreprise)
            {
                if($entreprise->populaire !== 1)
                {
                    unset($entreprises[$entrepriseId]);
                }
            }
        }
            
        return view("rechercheAvancee", ['resultats'=>$entreprises]);
    }
}
