<?php

namespace App\Http\Controllers;

use App\Models\GroupeCommodite;
use App\Models\Commodite;
use Illuminate\Http\Request;

class GroupeCommoditeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupesCommodite = GroupeCommodite::all();
        return view("groupeCommodite.index", ['groupesCommodite'=>$groupesCommodite]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groupeCommodite = new GroupeCommodite();
        return view("groupeCommodite.create", ["groupeCommodite"=>$groupeCommodite]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $groupeCommodite = new GroupeCommodite();
        $groupeCommodite->fill($request->all());
        $groupeCommodite->save();
        return redirect()->route("groupesCommodite.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GroupeCommodite  $groupeCommodite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $groupeCommodite = GroupeCommodite::find($id);
        $commodites = Commodite::where("groupecommodite_id", "LIKE", "%$id%")
        ->select('id', 'nom')
        ->orderBy('nom')
        ->get();
        return view('groupeCommodite.show', ['groupeCommodite' => $groupeCommodite, 'commodites' => $commodites]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GroupeCommodite  $groupeCommodite
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupeCommodite $groupeCommodite)
    {
        return view("groupeCommodite.edit", ["groupeCommodite"=>$groupeCommodite]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GroupeCommodite  $groupeCommodite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GroupeCommodite $groupeCommodite)
    {
        $groupeCommodite->fill($request->all());
        $groupeCommodite->save();
        return redirect()->route("groupesCommodite.index");
    }

    public function delete(GroupeCommodite $groupeCommodite)
    {
        return view('groupeCommodite.delete',['groupeCommodite' => $groupeCommodite]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GroupeCommodite  $groupeCommodite
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupeCommodite $groupeCommodite)
    {
        $groupeCommodite->delete();
        return redirect()->route("groupesCommodite.index");
    }
}
