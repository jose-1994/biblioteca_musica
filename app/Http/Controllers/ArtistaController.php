<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artistas;
class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artista=  Artistas::all();
        return view('artistas.index')->with('artistas',$artista);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artistas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artista = new Artista();
        $artista->nombre= $request->get('nombre');
        $artista->pais= $request->get('pais');
        $artista->genero= $request->get('genero');
        $artista->save();
        return redirect('/artistas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
