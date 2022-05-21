<?php

namespace App\Http\Controllers;

use App\Models\Commodite;
use App\Models\GroupeCommodite;
use Illuminate\Http\Request;

class CommoditeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commodites = Commodite::all();
        return view('commodites.index', ['commodites' => $commodites]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $commodite = new Commodite();
        $groupesCommodite = GroupeCommodite::all();
        return view("commodites.create", ["commodite"=>$commodite, "groupesCommodite"=>$groupesCommodite]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commodite = new Commodite();
        $commodite->fill($request->all());
        $commodite->save();
        return redirect()->route("groupeCommodite.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commodite  $commodite
     * @return \Illuminate\Http\Response
     */
    public function show(Commodite $commodite)
    {
        $entreprise = Entreprise::find($id);
        //Récupère seulement la première categorie qu'il appartient
        $categorie_entreprise = CategorieEntreprise::where('entreprise_id', $id)->first();
        $categorie = Categorie::find($categorie_entreprise->categorie_id);
        return view('entreprises.show', ['entreprise' => $entreprise], ['categorie' => $categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commodite  $commodite
     * @return \Illuminate\Http\Response
     */
    public function edit(Commodite $commodite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commodite  $commodite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commodite $commodite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commodite  $commodite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commodite $commodite)
    {
        //
    }
}
