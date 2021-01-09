<?php

namespace App\Http\Controllers;

use App\Models\Lane;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class LaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Lane::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lane::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lane  $lane
     * @return \Illuminate\Http\Response
     */
    public function show(Lane $lane)
    {
        return $lane;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lane  $lane
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lane $lane)
    {
        $lane->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lane  $lane
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lane $lane)
    {
        $lane->delete();
    }
}
