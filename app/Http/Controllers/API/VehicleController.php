<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return response()->json([
            'vehicles' => $vehicles,
        ]);
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
     * @param  \App\Models\Vegicle  $vegicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vegicle $vegicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vegicle  $vegicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vegicle $vegicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vegicle  $vegicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vegicle $vegicle)
    {
        //
    }
}
