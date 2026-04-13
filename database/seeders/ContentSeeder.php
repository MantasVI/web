<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Content;


class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $movies = [
            'Alien_Covenant', 'Avatar_Fire_And_Ash', 'Avatar_The_Way_Of_Water',
            'Avengers_Endgame', 'Avengers_Infinity_War', 'Black_Panther',
            'Borat', 'Django_Unchained', 'Doctor_Strange',
            'Doctor_Strange_In_The_Multiverse_Of_Madness', 'Dumb_And_Dumber',
            'Fight_Club', 'Five_Nights_At_Freddys', 'Five_Nights_At_Freddys_2',
            'Forrest_Gump', 'Halloween_2', 'Harry_Potter_And_The_Deathly_Hollows_Part_2',
            'Home_Alone', 'Inglourious_Basterds', 'IT', 'Jaws',
            'John_Wick_Chapter_2', 'John_Wick_Chapter_4',
            'Lord_Of_The_Rings_The_Return_Of_The_King', 'Lord_Rings_Return_King',
            'Mad_Max_Fury_Road', 'Pulp_Fiction', 'Scream', 'Seven', 'Shaft',
            'Shrek', 'Spiderman_2', 'Spirited_Away', 'Superbad',
            'The_Amazing_Spiderman', 'The_Dark_Knight', 'The_Godfather',
            'The_Green_Mile', 'The_Hangover_Part_2', 'The_Matrix',
            'The_Shawshank_Redemption', 'The_Shining', 'The_Silence_Of_The_Lambs',
            'The_Wolf_Of_Wall_Steet',
        ];

        $series = [
            'A_Knight_Of_The_Seven_Kingdoms', 'Andor', 'Arcane', 'Attack_On_Titan',
            'Avatar_The_Last_Airbender', 'Band_Of_Brothers', 'Better_Call_Saul',
            'Blue_Eye_Samurai', 'Breaking_Bad', 'Chainsaw_Man', 'Death_Note',
            'Demon_Slayer', 'Dragonball_Z', 'Game_Of_Thrones', 'Gravity_Falls',
            'House_Of_The_Dragon', 'Invincable', 'Loki',
            'Lord_Of_The_Rings_The_Rings_Of_Power', 'Lost', 'Naruto_Shippuden',
            'One_Piece', 'Peaky_Blinders', 'Rick_And_Morty', 'Spongebob_Squarepants',
            'Stranger_Things', 'The_Mandalorian', 'The_Simpsons', 'The_Wire',
            'The_Wire_', 'The_Witcher', 'Vinland_Saga', 'Wednesday',
        ];

        foreach($movies as $movie)
            {
               Content::create([
                    'title' => str_replace('_', ' ', $movie),
                    'image_url' => 'images/movies/' . $movie . '.jpg',
                    'type' => 'movie',
                ]); 
            }
        foreach($series as $serie)
            {
               Content::create([
                    'title' => str_replace('_', ' ', $serie),
                    'image_url' => 'images/series/' . $serie . '.jpg',
                    'type' => 'series',
                ]); 
            }
    }
}
