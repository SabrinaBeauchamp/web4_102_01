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
        $groupes = GroupeCommodite::all();
        return view("commodites.create", ["commodite"=>$commodite, "groupes"=>$groupes]);
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
        $groupes = GroupeCommodite::all();
        return redirect()->route("commodites.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commodite  $commodite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commodite = commodite::find($id);
        $groupeId = $commodite['groupecommodite_id'];
        $groupe = GroupeCommodite::find($groupeId);
        return view('commodites.show', ['commodite' => $commodite], ['groupe' => $groupe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commodite  $commodite
     * @return \Illuminate\Http\Response
     */
    public function edit(Commodite $commodite)
    {
        $groupes = GroupeCommodite::all();
        return view("commodites.edit", 
            [
                "commodite"=>$commodite,  
                "groupes"=>$groupes
            ]);
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
        $commodite->fill($request->all());
        $commodite->save();
        return redirect()->route("commodites.index");
    }

    public function delete(Commodite $commodite)
    {
        return view('commodites.delete',['commodite' => $commodite]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commodite  $commodite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commodite $commodite)
    {
        $commodite->delete();
        return redirect()->route("commodites.index");
    }
}
