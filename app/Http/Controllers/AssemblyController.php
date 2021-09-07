<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Assembly;
use Illuminate\Http\Request;

class AssemblyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assemblies = Assembly::all();

        return Inertia::render('Assemblies/Index', [
            'assemblies' => $assemblies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assemblies = Assembly::all();


        return Inertia::render('Assemblies/Create',[
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
        Assembly::create(
            $request->validate([
                'name' => 'bail|required|string|min:3|max:255',
                'address' => 'required|string|min:3|max:255'
            ])
        );

            return redirect()->route('assemblies.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assembly  $assembly
     * @return \Illuminate\Http\Response
     */
    public function show(Assembly $assembly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assembly  $assembly
     * @return \Illuminate\Http\Response
     */
    public function edit(Assembly $assembly)
    {
        return Inertia::render('Assemblies/Edit',[
            'assembly' => $assembly
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assembly  $assembly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assembly $assembly)
    {
        $assembly->update(
            $request->validate([
                'name' => 'bail|required|string|min:3|max:255|unique:assemblies,name,'.$assembly->id,
                'address' => 'bail|required|string|min:3|max:255'
            ])
        );

        return redirect()->route('assemblies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assembly  $assembly
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assembly $assembly)
    {
        //
    }
}
