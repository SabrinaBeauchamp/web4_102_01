<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Categorie;
use App\Models\Groupe;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie = new Categorie();
        $entreprises = Entreprise::all();
        $groupes = Groupe::all();
        return view("categories.create", 
        ["categorie"=>$categorie, "entreprises"=>$entreprises, "groupes"=>$groupes]);
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
        $entreprise_id = $request->get('entreprise_id', []);
        $categorie->entreprises()->sync($entreprise_id);
        return redirect()->route("groupes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::find($id);
        $groupes = Groupe::all();
        $groupeId = $categorie['groupe_id'];
        $groupe = $groupes[$groupeId];
        return view('categories.show', ['categorie' => $categorie], ['groupe' => $groupe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        $entreprises = Entreprise::all();
        $groupes = Groupe::all();
        return view("categories.edit", 
            [
                "categorie"=>$categorie, 
                "entreprises"=>$entreprises, 
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
        $entreprise_id = $request->get('entreprise_id', []);
        $categorie->entreprises()->sync($entreprise_id);
        return redirect()->route("groupes.index");
    }

    public function delete(Categorie $categorie)
    {
        return view('categories.delete',['categorie' => $categorie]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route("groupes.index");
    }
}
