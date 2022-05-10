<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Forfait;
use App\Models\Groupe;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view("forfaits.categories.index", ["categories"=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = new Categorie();
        $forfaits = Forfait::all();
        $groupes = Groupe::all();
        return view("forfaits.categories.create", 
            ["categorie"=>$categorie, "forfaits"=>$forfaits, "groupes"=>$groupes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorie = new Categorie();
        $categorie->fill($request->all());
        $categorie->save();
        $forfait_id = $request->get('forfait_id', []);
        $categorie->forfaits()->sync($forfait_id);
        return redirect()->route("forfaits.categories.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        return view("forfaits.categories.show", ["categorie"=>$categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        $forfaits = Forfait::all();
        $groupes = Groupe::all();
        return view("forfaits.categories.edit", 
            [
                "categorie"=>$categorie, 
                "forfaits"=>$forfaits, 
                "groupes"=>$groupes
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        $categorie->fill($request->all());
        $categorie->save();
        $forfait_id = $request->get('forfait_id', []);
        $categorie->forfaits()->sync($forfait_id);
        return redirect()->route("forfaits.categories.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
}
