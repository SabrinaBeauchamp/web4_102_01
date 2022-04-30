<?php

namespace App\Http\Controllers;

use App\Models\forfaits;
use Illuminate\Http\Request;

class ForfaitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forfaits = Forfaits::all();
        return view("forfaits.index", ['forfaits'=>$forfaits]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forfait = new Forfaits();
        return view("forfaits.create", ['forfaits'=>$forfait]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $forfait = new Forfaits();
        $forfait->fill($request->all());
        $forfait->save();
        return redirect()->route('forfaits.show', $forfait);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\forfaits  $forfaits
     * @return \Illuminate\Http\Response
     */
    public function show(forfaits $forfaits)
    {
        return view ("forfaits.show", ['forfaits'=>$forfaits]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\forfaits  $forfaits
     * @return \Illuminate\Http\Response
     */
    public function edit(forfaits $forfaits)
    {
        return view('forfaits.edit', ['forfaits'=>$forfaits]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\forfaits  $forfaits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, forfaits $forfaits)
    {
        $forfaits->fill($request->all());
        $forfaits->save();
        return redirect()->route('forfaits.show', $forfaits);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\forfaits  $forfaits
     * @return \Illuminate\Http\Response
     */
    public function destroy(forfaits $forfaits)
    {
        if ($request->has('delete')) {
            $forfaits->delete();
            return redirect()->route('forfaits.index');
        } else {
            return redirect()->route('forfaits.show', $forfaits);
        }
    }
}
