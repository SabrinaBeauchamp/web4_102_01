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
        $groupeAppartenance = Groupe::find($request->groupe);
        $categoriesDuGroupe = Categorie::where("groupe_id", "LIKE", "%$groupeAppartenance->id%")
            ->select('id', 'nom')->get();
        $entreprisesDuGroupe = collect();
        //Pour chaque categorie dans le groupe
        foreach($categoriesDuGroupe as $categorie)
        {
            $entreprisesId = CategorieEntreprise::where("categorie_id", "LIKE", "%$categorie->id%")
                ->select('entreprise_id')->get();
            //Pour chaque entreprise dans la categorie
            foreach($entreprisesId as $entrepriseId)
            {
                $entreprise = Entreprise::find($entrepriseId->entreprise_id);
                $entreprisesDuGroupe = $entreprisesDuGroupe->merge($entreprise);
            }
        }
        
        $groupes = Groupe::all();

        $entreprises = Entreprise::where("nom", "LIKE", "%$request->q%")
        //->orWhere me permet de récupéré à partir d'une autre columne
            ->select('id', 'nom', "entreprises as model")
            ->orderBy('nom')->get();
        return view("rechercheAvancee", ['resultats'=>$entreprises], ['groupes'=>$groupes]);
    }
}
