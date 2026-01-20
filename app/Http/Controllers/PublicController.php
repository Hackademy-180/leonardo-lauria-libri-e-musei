<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Film;
use App\Models\Museum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PublicController;

class PublicController extends Controller
{
   public function homepage () {
    return view('welcome');
}
// sezione libri
public function upload_book(){
    return view("libri.upload_book");
   
}
Public function post_book(Request $request){
    Book::create([
    "bookName"=>$request->bookName,
    "bookAutor"=>$request->bookAutor,
    "bookYear"=>$request->bookYear,
    "bookDescription"=>$request->bookDescription,
    "img"=>$request->file("img")->store("image","public"),
    "user_id"=>Auth::user()->id
]);
return redirect(route("card libri"))->with('status','libro inserito con successo');
}
public function card_libri(){
    $books=Book::all();
    return view("libri.card_libri",compact("books"));
}
// sezione musei
public function upload_museum(){
    return view("musei.upload_museum");
}
public function post_museum(Request $request){
    Museum::create([
    "museumName"=>$request->museumName,
    "museumCountry"=>$request->museumCountry,
    "museumYear"=>$request->museumYear,
    "museumDescription"=>$request->museumDescription,
    "user_id"=>Auth::user()->id
]);
return redirect(route("card musei"))->with('status','nuovo museo inserito con successo');
}
public function card_museum(){
    $museums=Museum::all();
    return view("musei.card_museum",compact("museums"));
}
// sezione film
public function film_upload(){
    return view("film.film_upload");
}
public function post_film(Request $request){
Film::create([
    "filmName"=>$request->filmName,
    "filmRegist"=>$request->filmRegist,
    "filmYear"=>$request->filmYear,
    "filmDescription"=>$request->filmDescription,
    "user_id"=>Auth::user()->id
]);
return redirect(route("film_collection"))->with('status','nuovo film inserito con successo');
}
public function film_collection(){
    $films=Film::all();
    return view("film.film_collection",compact("films"));
}


}
