<?php

namespace App\Http\Controllers;

use App\Models\CategorieForfait;
use App\Models\Entreprise;
use App\Models\forfait;
use App\Models\Groupe;
use Illuminate\Http\Request;

class CategorieForfaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategorieForfait::all();
        $groupes = Groupe::all();
        return view("forfaits.categories.index", ["categories"=>$categories,  'groupes'=>$groupes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = new CategorieForfait();
        $entreprises = Entreprise::all();
        return view ("forfaits.categories.create",
        ["categorie"=>$categorie, "entreprises"=>$entreprises]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorie = new CategorieForfait();
        $categorie->fill($request->all());
        $categorie->save();
        return redirect()->route("forfaits.categories.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categorieForfait  $categorieForfaits
     * @return \Illuminate\Http\Response
     */
    public function show(categorieForfait $categorie)
    {
        $groupes = Groupe::all();
        return view("forfaits.categories.show", ["categorie"=>$categorie, 'groupes'=>$groupes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categorieForfait  $categorieForfaits
     * @return \Illuminate\Http\Response
     */
    public function edit(categorieForfait $categorie)
    {
        $forfaits = forfait::all();
        return view("categories.edit",
            [
                "categorie"=>$categorie, 
                "forfaits"=>$forfaits, 
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categorieForfait  $categorieForfaits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categorieForfait $categorie)
    {
        $categorie->fill($request->all());
        $categorie->save();
        $forfaits_id = $request->get('forfaits_id', []);
        $categorie->forfaits()->sync($forfaits_id);
        return redirect()->route("categories.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categorieForfait  $categorieForfaits
     * @return \Illuminate\Http\Response
     */
    public function destroy(categorieForfait $categorie)
    {
        //
    }
}
