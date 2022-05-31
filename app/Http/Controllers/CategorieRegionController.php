<?php

namespace App\Http\Controllers;

use App\Models\CategorieRegion;
use App\Models\Ville;
use Illuminate\Http\Request;

class CategorieRegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriesRegion = CategorieRegion::all();
        return view('categoriesRegion.index', ['categoriesRegion' => $categoriesRegion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorieRegion = new CategorieRegion();
        return view("categoriesRegion.create", ["categorieRegion"=>$categorieRegion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorieRegion = new CategorieRegion();
        $categorieRegion->fill($request->all());
        $categorieRegion->save();
        return redirect()->route("categoriesRegion.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorieRegion  $categorieRegion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorieRegion = CategorieRegion::find($id);
        $villes = Ville::where("categorie_region_id", "LIKE", "%$id%")
            ->select('id', 'nom')
            ->get();
        return view('categoriesRegion.show', ['villes' => $villes, 'categorieRegion' => $categorieRegion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorieRegion  $categorieRegion
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieRegion $categorieRegion)
    {
        return view("categoriesRegion.edit",
            [
                "categorieRegion"=>$categorieRegion
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategorieRegion  $categorieRegion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategorieRegion $categorieRegion)
    {
        $categorieRegion->fill($request->all());
        $categorieRegion->save();
        return redirect()->route("categoriesRegion.index");
    }

    public function delete(CategorieRegion $categorieRegion)
    {
        return view('categoriesRegion.delete',['categorieRegion' => $categorieRegion]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorieRegion  $categorieRegion
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorieRegion $categorieRegion)
    {
        $categorieRegion->delete();
        return redirect()->route("categoriesRegion.index");
    }
}
