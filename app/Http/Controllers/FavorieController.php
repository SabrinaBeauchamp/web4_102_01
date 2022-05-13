<?php

namespace App\Http\Controllers;

use App\Models\Favorie;
use Illuminate\Http\Request;

class FavorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favories = Favorie::all();
        return view("favories.index", ['favories'=>$favories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $favorie = new Favorie();
        return view("favories.create", ["favorie"=>$favorie]);
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
        return redirect()->route("favories.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\favorie  $favorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $favorie = Favorie::find($id);
        return view('favories.show',['favorie' => $favorie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\favorie  $favorie
     * @return \Illuminate\Http\Response
     */
    public function edit(favorie $favorie)
    {
        return view("favories.edit", ["favorie"=>$favorie]);
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
        return redirect()->route("favories.index");
    }

    public function delete(Favorie $favorie)
    {
        return view('favories.delete',['favorie' => $favorie]);
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
        return redirect()->route("favories.index");
    }
}
