<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\CategorieEntreprise;
use App\Models\CommoditeEntreprise;
use App\Models\Commodite;
use App\Models\Categorie;
use App\Models\Groupe;
use App\Models\Ville;
use Illuminate\Http\Request;

use Image;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = Entreprise::all();
        $groupes = Groupe::all();
        return view('entreprises.index', ['entreprises' => $entreprises, 'groupes'=>$groupes]);
    }

    public function togglePopulaire(Entreprise $entreprise) {
        $entreprise->populaire = !$entreprise->populaire;
        $entreprise->save();
        return ['resultat'=>$entreprise->populaire];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprise = new Entreprise();

        $commodites = Commodite::all();
        //Récupère les commodites de l'entreprise
        $commoditesId = CommoditeEntreprise::where("entreprise_id", $entreprise->id)
        ->select('commodite_id')
        ->get();
        $id = array();
        foreach($commoditesId as $commoditeId){
            array_push($id, $commoditeId->commodite_id);
        }

        $categories = Categorie::all();
        $villes = Ville::all();

        return view("entreprises.create", ["entreprise"=>$entreprise, "commodites"=>$commodites, "commoditesDeEntreprise"=>$id, "categories"=>$categories, "villes"=>$villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entreprise = new Entreprise();
        $entreprise->fill($request->all());
        $entreprise->save();
        $categories = [];
        if (isset($request->categorie_id)) {
            $categories = $request->categorie_id;
        }
        $entreprise->categories()->sync($categories);

        //COMMODITES
        $commodites = [];
        if (isset($request->commodite_id)) {
            $commodites = $request->commodite_id;
        }

        foreach($commodites as $commoditeId)
        {
            $commodite = Commodite::find($commoditeId);
            if($commodite !== null)
            {
                $commoditeEntreprise = new CommoditeEntreprise();
                $commoditeEntreprise->commodite_id = $commoditeId;
                $commoditeEntreprise->entreprise_id = $entreprise->id;
                $commoditeEntreprise->fill($request->all());
                $commoditeEntreprise->save();
            }
        }
        if($request->file('logo')->isValid()) {
            $logo = Image::make($request->logo)->resize(300, 200);
            $logo->save(public_path("img/entreprises/logo/$entreprise->id.jpg"));
        }
        if($request->file('photo')->isValid()) {
            $photo = Image::make($request->photo)->resize(300, 200);
            $photo->save(public_path("img/entreprises/$entreprise->id.jpg"));
        }

        return redirect()->route("groupes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entreprise = Entreprise::find($id);
        //Récupère seulement la première catégorie qu'il appartient
        $categorie_entreprise = CategorieEntreprise::where('entreprise_id', $id)->first();
        $categorie = Categorie::find($categorie_entreprise->categorie_id);
        //Récupère seulement le premier groupe auquel il appartient
        $groupeId = $categorie['groupe_id'];
        $groupe = Groupe::find($groupeId);

        //Récupère les commodites de l'entreprise
        $commoditesId = CommoditeEntreprise::where("entreprise_id", $id)
            ->select('commodite_id')
            ->get()
            ->toArray();
        $commodites = Commodite::findMany($commoditesId);
        
        return view('entreprises.show', 
        [   'entreprise' => $entreprise, 
            'categorie' => $categorie, 
            'groupeSelectionner' => $groupe, 
            'commodites' => $commodites
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        $commodites = Commodite::all();
        //Récupère les commodites de l'entreprise
        $commoditesId = CommoditeEntreprise::where("entreprise_id", $entreprise->id)
        ->select('commodite_id')
        ->get();
        $id = array();
        foreach($commoditesId as $commoditeId){
            array_push($id, $commoditeId->commodite_id);
        }

        $categories = Categorie::all();
        $villes = Ville::all();
        return view("entreprises.edit", ["entreprise"=>$entreprise, "commodites"=>$commodites, "commoditesDeEntreprise"=>$id, "categories"=>$categories, "villes"=>$villes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        $entreprise->fill($request->all());
        $entreprise->save();
        $categories = [];
        if (isset($request->categorie_id)) {
            $categories = $request->categorie_id;
        }
        $entreprise->categories()->sync($categories);

        //COMMODITES
        //Récupère les commodites de l'entreprise et efface les aciennes
        CommoditeEntreprise::where("entreprise_id", $entreprise->id)
            ->delete();

        //les remplaces par les nouveaux
        $commodites = [];
        if (isset($request->commodite_id)) {
            $commodites = $request->commodite_id;
        }

        foreach($commodites as $commoditeId)
        {
            $commodite = Commodite::find($commoditeId);
            if($commodite !== null)
            {
                $commoditeEntreprise = new CommoditeEntreprise();
                $commoditeEntreprise->commodite_id = $commoditeId;
                $commoditeEntreprise->entreprise_id = $entreprise->id;
                $commoditeEntreprise->fill($request->all());
                $commoditeEntreprise->save();
            }
        }

        return redirect()->route("groupes.index");
    }

    public function delete(Entreprise $entreprise)
    {
        return view('entreprises.delete',['entreprise' => $entreprise]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {

        @unlink($entreprise->urlLogo);
        @unlink($entreprise->urlPhoto);
        $entreprise->delete();
        return redirect()->route("groupes.index");
    }

    /**
     * Ajouter dans les favories.
     *
     * @param  $id 
     * @return \Illuminate\Http\resultat
     */
    public function like($id)
    {
        $user = Auth::user();
        $user->likesEntreprises()->detach($id);
        $user->likesEntreprises()->attach($id);
        return ["resultat"=>true];
    }

    /**
     * enlever des favories
     */
    public function dislike($id)
    {
        $user = Auth::user();
        $user->likesEntreprises()->detach($id);
        return ["resultat"=>false];
    }
}
