<?php

namespace App\Http\Controllers;

use App\Models\Favorie;
use Illuminate\Http\Request;
use Auth;

class FavorieController extends Controller
{
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
    /**
     * Ajouter dans les favories.
     *
     * @param  $id 
     * @return \Illuminate\Http\resultat
     */
    public function likeF($id)
    {
        $user = Auth::user();
        $user->likesForfaits()->detach($id);
        $user->likesForfaits()->attach($id);
        return ["resultat"=>true];
    }

    /**
     * enlever des favories
     */
    public function dislikeF($id)
    {
        $user = Auth::user();
        $user->likesForfaits()->detach($id);
        return ["resultat"=>false];
    }
    /**
     * Ajouter dans les favories.
     *
     * @param  $id 
     * @return \Illuminate\Http\resultat
     */
    public function likeE($id)
    {
        $user = Auth::user();
        $user->likesEvenements()->detach($id);
        $user->likesEvenements()->attach($id);
        return ["resultat"=>true];
    }

    /**
     * enlever des favories
     */
    public function dislikeE($id)
    {
        $user = Auth::user();
        $user->likesEvenements()->detach($id);
        return ["resultat"=>false];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = auth()->user();
        $favories = Favorie::all();;
        return view("users.favories.index", ['favories'=>$favories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $favorie = new Favorie();
        return view("users.favories.create", ["favorie"=>$favorie]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $favorie = new Favorie();
        $favorie->fill($request->all());
        $favorie->save();
        return redirect()->route("users.favories.index");
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\favorie  $favorie
     * @return \Illuminate\Http\Response
     */
    public function edit(favorie $favorie)
    {
        $favories = Favorie::all();
        return view("users.favories.edit", ["favories"=>$favories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favorie  $favorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorie $favorie)
    {
        $favorie->fill($request->all());
        $favorie->save();
        return redirect()->route("users.favories.index");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favorie  $favorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorie $favorie)
    {
        $favorie->delete();
        return redirect()->route("users.favories.index");
    }
}
