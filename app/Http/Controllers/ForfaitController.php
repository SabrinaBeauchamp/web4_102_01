<?php

namespace App\Http\Controllers;

use App\Models\forfait;
use App\Models\Groupe;
use Illuminate\Http\Request;

class ForfaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forfaits = Forfait::all();
        return view("forfaits.index", ['forfaits'=>$forfaits]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forfait = new Forfait();
        $groupes = Groupe::all();
        return view("forfaits.create", ['forfait'=>$forfait, "groupes"=>$groupes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $forfait = new Forfait();
        $forfait->fill($request->all());
        $forfait->save();
        $categories = [];
        if (isset($request->categorie_id)) {
            $categories = $request->categorie_id;
        }
        $forfait->categories()->sync($categories);
        return redirect()->route("forfaits.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\forfait  $forfaits
     * @return \Illuminate\Http\Response
     */
    public function show(forfait $forfait)
    {
        $groupes = Groupe::all();
        return view ("forfaits.show", ['forfait'=>$forfait, 'groupes'=>$groupes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\forfait  $forfaits
     * @return \Illuminate\Http\Response
     */
    public function edit(forfait $forfait)
    {
        $groupes = Groupe::all();
        return view('forfaits.edit', ['forfait'=>$forfait, "groupes"=>$groupes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\forfait  $forfaits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, forfait $forfait)
    {
        $forfait->fill($request->all());
        $forfait->save();
        $categories = [];
        if (isset($request->categorie_id)) {
            $categories = $request->categorie_id;
        }
        $forfait->categories()->sync($categories);
        return redirect()->route(".categories.index");
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Models\Forfait  $element
     * @return \Illuminate\Http\Response
     */
    public function delete(Forfait $forfait)
    {
        return view('forfaits.delete', ['forfaits'=>$forfait]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\forfait  $forfaits
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, forfait $forfait)
    {
        if ($request->has('delete')) {
            $forfait->delete();
            return redirect()->route('forfaits.index');
        } else {
            return redirect()->route('forfaits.show', $forfait);
        }
    }
}
