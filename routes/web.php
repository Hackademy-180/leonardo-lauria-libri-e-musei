<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PublicController;
// pagina iniziale
Route::get('/', [PublicController::class,"homepage"])->name("homepage");
// pagine libri
Route::get("/libri/upload_book",[PublicController::class,"upload_book"])->name("inserimento libri");
Route::post("/libri/submit",[PublicController::class,"post_book"])->name("post_book");
Route::get("/libri/card_libri",[PublicController::class,"card_libri"])->name("card libri");
// pagine musei
Route::get("/musei/upload_museum",[PublicController::class,"upload_museum"])->name("inserimento musei");
Route::post("/musei/submit",[PublicController::class,"post_museum"])->name("post_museum");
Route::get("/musei/card_museum",[PublicController::class,"card_museum"])->name("card musei");
// pagine film
Route::get("/film/film_upload",[PublicController::class,"film_upload"])->name("film_upload");
Route::post("/film/submit",[PublicController::class,"post_film"])->name("post_film");
Route::get("/film/film_collection",[PublicController::class,"film_collection"])->name("film_collection");

// pagine canzone
Route::get("/song/index_song",[SongController::class,"index"])->name("index_song");
Route::get("/song/card_song",[SongController::class,"create"])->name("create_song");
Route::post("/song/submit",[SongController::class,"store"])->name("store_song");
Route::get("/song/show_song/{song}",[SongController::class,"show"])->name("show_song");
Route::get("/song/edit_song/{song}",[SongController::class,"edit"])->name("edit_song");
Route::put("/song/update_song/{song}",[SongController::class,"update"])->name("update_song");
Route::delete("/song/delete/{song}",[SongController::class,"destroy"])->name("destroy_song");






