<?php

namespace App\Http\Controllers;

use App\Models\Animals;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Animals::All();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a=new animals();
        $a->name=$request->name;
        $a->color=$request->color;
        $a->weight=$request->weight;
        $a->count=$request->count;
        $a->save();
        return $a->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function show(Animals $animals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animals $animals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animals  $animals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animals $animals)
    {
        //
    }
}
