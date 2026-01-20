<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres=["rock","classica","pop","metal","rap"];
        foreach($genres as $genre){
            DB::table('genres')->insert([
            'name' => $genre
        ]);
            } 
        }
    }

