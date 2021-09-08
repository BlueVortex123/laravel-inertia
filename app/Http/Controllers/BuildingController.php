<?php

namespace App\Http\Controllers;

use App\Models\Assembly;
use App\Models\Building;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::with('assembly')->get();

        return Inertia::render('Buildings/Index',[
            'buildings' => $buildings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assemblies = Assembly::with('buildings')->get();
        
        return Inertia::render('Buildings/Create', [
            'assemblies' => $assemblies
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
        $validatedData = $request->validate([
            'name' => 'bail|required|string|min:1|max:255',
            'no_floors' => 'bail|required|string|min:1|max:255',
            'assembly_id' => 'exists:assemblies,id|required'
            ]);
            
            $buildings = new Building($validatedData);
            $buildings->save();
            
            return redirect()->route('buildings.index');
            
        }
        
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Building  $building
         * @return \Illuminate\Http\Response
         */
        public function show(Building $building)
        {
            //
        }
        
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Building  $building
         * @return \Illuminate\Http\Response
         */
        public function edit(Building $building)
        {

            $assemblies = Assembly::with('buildings')->get();
            
            return Inertia::render('Buildings/Edit', [
                'building' => $building,
                'assemblies' => $assemblies,
            ]);
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Building $building)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building)
    {
        //
    }
}
