<?php

use Illuminate\Support\Facades\Route;
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



