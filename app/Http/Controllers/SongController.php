<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs=Song::all();
        return view("song.index_song",compact("songs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("song.card_song");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Song::create([
           "title"=>$request->title,
           "yearRelese"=>$request->yearRelese,
           "autor"=>$request->autor,
           "img"=>$request->file("img")->store("image","public")
        ]);
        return redirect(route("index_song"))->with("status","canzone salvata con successo");
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        return view("song.show_song",compact("song"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        return view("song.edit_song",compact("song"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        $song->update([
           "title"=>$request->title,
           "yearRelese"=>$request->yearRelese,
           "autor"=>$request->autor,
           "img"=>$request->file("img")->store("image","public")
        ]);
        return redirect(route("index_song"))->with("status","canzone modificata con successo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect(route("index_song"))->with("status","canzone eliminata con successo");
        
    }
}
