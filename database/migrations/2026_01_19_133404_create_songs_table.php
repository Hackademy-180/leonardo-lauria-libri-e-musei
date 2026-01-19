<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // { I dati da raccogliere sono il titolo, l'anno di rilascio, il nome dell'autore ed un'immagine
        //  della copertina dell'album a cui appartiene.
        //  Ogni utente può essere in grado di visualizzare la pagina con tutte le canzoni ed il dettaglio della 
        // singola canzone ma solo l'autore deve poter modificare o cancellare la canzone. 
        // Nelle card della pagina index deve essere visibile anche l'immagine attribuita alla singola canzone.
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->integer("yearRelese");
            $table->string("autor");
            $table->string("img");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
