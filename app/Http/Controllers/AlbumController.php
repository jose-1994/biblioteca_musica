<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums=Album::all();
        return view('album.index')->with('albums',$albums);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('album.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $albums = new Album();
        $albums->titulo = $request->get('titulo');
        $albums->añolanzamiento = $request->get('añolanzamiento');
        $albums->idartista = $request->get('idartista');

        $albums->save();

        return redirect('/album');

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
        $albums=Album::find($id);
        return view('album.edit')->with('album',$albums);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $album = Album::find($id);
        $album->titulo = $request->get('titulo');
        $album->añolanzamiento = $request->get('añolanzamiento');
        $album->idartista = $request->get('idartista');

        $album->save();

        return redirect('/album');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $album = Album::find($id);
        $album->delete();
        return redirect('/album');

    }
   /* public function imprimirAlbum(){
        $album = Album::all();
        $pdf = \PDF::loadView('album.listaalbum', ['albums'=>$album]);
        return $pdf->download('albums.pdf');
   }*/
    public function imprimirAlbum(string $id){
        $album = Album::find($id);
        $pdf = \PDF::loadView('album.listaalbum', ['albums'=>$album]);
        return $pdf->download($album->titulo.'.pdf');
   }
}
