<?php

namespace App\Http\Controllers;

use App\Models\GroupeCommodite;
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
        $groupeCommodite = GroupeCommodite::all();
        return view("groupeCommodite.index", ['groupeCommodite'=>$groupeCommodite]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GroupeCommodite  $groupeCommodite
     * @return \Illuminate\Http\Response
     */
    public function show(GroupeCommodite $groupeCommodite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GroupeCommodite  $groupeCommodite
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupeCommodite $groupeCommodite)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GroupeCommodite  $groupeCommodite
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupeCommodite $groupeCommodite)
    {
        //
    }
}
