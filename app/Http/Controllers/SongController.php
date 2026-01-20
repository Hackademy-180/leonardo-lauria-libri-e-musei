<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs=Song::all();
        $genres=Genre::all();
        return view("song.index_song",compact("songs","genres"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres=Genre::all();
        return view("song.card_song",compact("genres"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $song=Song::create([
           "title"=>$request->title,
           "yearRelese"=>$request->yearRelese,
           "autor"=>$request->autor,
           "img"=>$request->file("img")->store("image","public"),
           "user_id"=>Auth::user()->id
        ]);
        $song->genres()->attach($request->genres);
        return redirect(route("index_song"))->with("status","canzone salvata con successo");
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        return view("song.show_song",compact("song",));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        $genres=Genre::all();
        return view("song.edit_song",compact("song","genres"));
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
        $song->genres()->sync($request->genres);
        return redirect(route("index_song"))->with("status","canzone modificata con successo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        $song->genres()->detach();
        $song->delete();
        return redirect(route("index_song"))->with("status","canzone eliminata con successo");
        
    }
}
