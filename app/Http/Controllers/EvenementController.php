<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Ville;
use App\Models\Groupe;
use Illuminate\Http\Request;



class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenements = Evenement::all();
        $evenements = Evenement::orderBy('start', 'desc')->get();
        $groupes = Groupe::all();
        return view ('evenements.index', ['evenements'=>$evenements, 'groupes'=>$groupes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evenements = new Evenement();
        $villes = Ville::all();
        return view ('evenements.create', ['evenement'=>$evenements, 'villes'=>$villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evenement = new Evenement();
        $evenement->fill($request->all());
        $evenement->save();
        return redirect()->route('evenements.index', $evenement);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function show(Evenement $evenement)
    {
        $villes = Ville::all();
        return view ("evenements.show", ['evenement'=>$evenement, 'villes'=>$villes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function edit(Evenement $evenement)
    {
        $villes = Ville::all();
        return view ("evenements.edit", ['evenement'=>$evenement, 'villes'=>$villes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evenement $evenement)
    {
        $evenement->fill($request->all());
        $evenement->save();
        
        return redirect()->route('evenements');
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Models\Evenement  $element
     * @return \Illuminate\Http\Response
     */
    public function delete(Evenement $evenement)
    {
        return view('evenements.delete', ['evenements'=>$evenement]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Evenement $evenement)
    {
        if ($request->has('delete')) {
            $evenement->delete();
            return redirect()->route('evenements.index');
        } else {
            return redirect()->route('evenements.show', $evenement);
        }
    }
}
