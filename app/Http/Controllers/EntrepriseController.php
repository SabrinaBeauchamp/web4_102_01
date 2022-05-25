<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\CategorieEntreprise;
use App\Models\CommoditeEntreprise;
use App\Models\Commodite;
use App\Models\Categorie;
use App\Models\Groupe;
use Illuminate\Http\Request;

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
        return view('entreprises.index', ['entreprises' => $entreprises]);
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

        return view("entreprises.create", ["entreprise"=>$entreprise, "commodites"=>$commodites, "commoditesDeEntreprise"=>$id]);
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
        //Récupère seulement la première categorie qu'il appartient
        $categorie_entreprise = CategorieEntreprise::where('entreprise_id', $id)->first();
        $categorie = Categorie::find($categorie_entreprise->categorie_id);
        //Récupère seulement le premier groupe auquel il appartient
        $categorie = Categorie::find($id);
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
        return view("entreprises.edit", ["entreprise"=>$entreprise, "commodites"=>$commodites, "commoditesDeEntreprise"=>$id]);
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
        $entreprise->delete();
        return redirect()->route("groupes.index");
    }
}
