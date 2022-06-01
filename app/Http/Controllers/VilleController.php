<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Ville;
use App\Models\CategorieRegion;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = Ville::all();
        return view('villes.index', ['villes' => $villes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprises = Entreprise::all();
        $ville = new Ville();
        $categoriesRegion = CategorieRegion::all();
        return view("villes.create", ["ville"=>$ville, "categoriesRegion"=>$categoriesRegion, "entreprises"=>$entreprises]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ville = new Ville();
        $ville->fill($request->all());
        $ville->save();
        return redirect()->route("villes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ville = Ville::find($id);
        $categorieRegion = CategorieRegion::find($ville->categorie_region_id);
        $entreprises = Entreprise::where("ville_id", "LIKE", "%$ville->id%")
            ->select('id', 'nom')
            ->get();
        return view('villes.show', ['ville' => $ville, 'categorieRegion' => $categorieRegion, 'entreprises' => $entreprises]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function edit(Ville $ville)
    {
        $entreprises = Entreprise::all();
        $categoriesRegion = CategorieRegion::all();
        return view("villes.edit", 
            [
                "ville"=>$ville,  
                "categoriesRegion"=>$categoriesRegion, 
                "entreprises"=>$entreprises
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ville $ville)
    {
        
        $ville->fill($request->all());
        $ville->save();
        $entreprises_id = $request->get('entreprise_id', []);
        //dd($entreprises_id);
        foreach($entreprises_id as $entreprise_id){
            $entreprise = Entreprise::find($entreprise_id);
            $entreprise->ville_id = $ville->id;
            $entreprise->save();
            //dd($entreprise);
        }
        return redirect()->route("villes.index");
    }

    public function delete(Ville $ville)
    {
        return view('villes.delete',['ville' => $ville]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ville $ville)
    {
        $ville->delete();
        return redirect()->route("villes.index");
    }
}
