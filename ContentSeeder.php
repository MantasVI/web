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
            ['name' => 'Alien_Covenant', 'genre' => 'horror'],
            ['name' => 'Avatar_Fire_And_Ash', 'genre' => 'fantasy'],
            ['name' => 'Avatar_The_Way_Of_Water', 'genre' => 'fantasy'],
            ['name' => 'Avengers_Endgame', 'genre' => 'action'],
            ['name' => 'Avengers_Infinity_War', 'genre' => 'action'],
            ['name' => 'Black_Panther', 'genre' => 'action'],
            ['name' => 'Borat', 'genre' => 'comedy'],
            ['name' => 'Django_Unchained', 'genre' => 'action'],
            ['name' => 'Doctor_Strange', 'genre' => 'fantasy'],
            ['name' => 'Doctor_Strange_In_The_Multiverse_Of_Madness', 'genre' => 'fantasy'],
            ['name' => 'Dumb_And_Dumber', 'genre' => 'comedy'],
            ['name' => 'Fight_Club', 'genre' => 'action'],
            ['name' => 'Five_Nights_At_Freddys', 'genre' => 'horror'],
            ['name' => 'Five_Nights_At_Freddys_2', 'genre' => 'horror'],
            ['name' => 'Forrest_Gump', 'genre' => 'comedy'],
            ['name' => 'Halloween_2', 'genre' => 'horror'],
            ['name' => 'Harry_Potter_And_The_Deathly_Hollows_Part_2', 'genre' =>'fantasy'],
            ['name' => 'Home_Alone', 'genre' => 'comedy'],
            ['name' => 'Inglourious_Basterds', 'genre' => 'action'],
            ['name' => 'IT', 'genre' => 'horror'],
            ['name' => 'Jaws', 'genre' => 'horror'],
            ['name' => 'John_Wick_Chapter_2', 'genre' => 'action'],
            ['name' => 'John_Wick_Chapter_4', 'genre' => 'action'],
            ['name' => 'Lord_Of_The_Rings_The_Return_Of_The_King', 'genre' => 'fantasy'],
            ['name' => 'Mad_Max_Fury_Road', 'genre' => 'action'],
            ['name' => 'Pulp_Fiction', 'genre' => 'action'],
            ['name' => 'Scream', 'genre' => 'horror'],
            ['name' => 'Seven', 'genre' => 'horror'],
            ['name' => 'Shaft', 'genre' => 'action'],
            ['name' => 'Shrek', 'genre' => 'comedy'],
            ['name' => 'Spiderman_2', 'genre' => 'action'],
            ['name' => 'Spirited_Away', 'genre' => 'fantasy'],
            ['name' => 'Superbad', 'genre' => 'comedy'],
            ['name' => 'The_Amazing_Spiderman', 'genre' => 'action'],
            ['name' => 'The_Dark_Knight', 'genre' => 'action'],
            ['name' => 'The_Godfather', 'genre' => 'action'],
            ['name' => 'The_Green_Mile', 'genre' => 'fantasy'],
            ['name' => 'The_Hangover_Part_2', 'genre' => 'comedy'],
            ['name' => 'The_Matrix', 'genre' => 'action'],
            ['name' => 'The_Shawshank_Redemption', 'genre' => 'action'],
            ['name' => 'The_Shining', 'genre' => 'horror'],
            ['name' => 'The_Silence_Of_The_Lambs', 'genre' => 'horror'],
            ['name' => 'The_Wolf_Of_Wall_Street', 'genre' => 'action'],
            ['name' => 'Gladiator', 'genre' => 'action'],
            ['name' => 'Interstellar', 'genre' => 'fantasy'],
            ['name' => 'The_Conjuring', 'genre' => 'horror'],
            ['name' => 'Step_Brothers', 'genre' => 'comedy'],
            ['name' => 'Thor_Ragnarok', 'genre' => 'action'],
            ['name' => 'Hereditary', 'genre' => 'horror'],
            ['name' => 'The_Grand_Budapest_Hotel', 'genre' => 'comedy'],
        ];

        $series = [
            ['name' => 'A_Knight_Of_The_Seven_Kingdoms', 'genre' => 'drama'],
            ['name' => 'Andor', 'genre' => 'fantasy'],
            ['name' => 'Arcane', 'genre' => 'animation'],
            ['name' => 'Attack_On_Titan', 'genre' => 'anime'],
            ['name' => 'Avatar_The_Last_Airbender', 'genre' => 'animation'],
            ['name' => 'Band_Of_Brothers', 'genre' => 'drama'],
            ['name' => 'Better_Call_Saul', 'genre' => 'drama'],
            ['name' => 'Blue_Eye_Samurai', 'genre' => 'animation'],
            ['name' => 'Breaking_Bad', 'genre' => 'drama'],
            ['name' => 'Chainsaw_Man', 'genre' => 'anime'],
            ['name' => 'Death_Note', 'genre' => 'action'],
            ['name' => 'Demon_Slayer', 'genre' => 'anime'],
            ['name' => 'Dragonball_Z', 'genre' => 'anime'],
            ['name' => 'Game_Of_Thrones', 'genre' => 'drama'],
            ['name' => 'Gravity_Falls', 'genre' => 'animation'],
            ['name' => 'House_Of_The_Dragon', 'genre' => 'drama'],
            ['name' => 'Invincible', 'genre' => 'animation'],
            ['name' => 'Loki', 'genre' => 'fantasy'],
            ['name' => 'Lord_Of_The_Rings_The_Rings_Of_Power', 'genre' => 'fantasy'],
            ['name' => 'Lost', 'genre' => 'drama'],
            ['name' => 'Naruto_Shippuden', 'genre' => 'anime'],
            ['name' => 'One_Piece', 'genre' => 'anime'],
            ['name' => 'Peaky_Blinders', 'genre' => 'drama'],
            ['name' => 'Rick_And_Morty', 'genre' => 'animation'],
            ['name' => 'Spongebob_Squarepants', 'genre' => 'animation'],
            ['name' => 'Stranger_Things', 'genre' => 'fantasy'],
            ['name' => 'The_Mandalorian', 'genre' => 'fantasy'],
            ['name' => 'The_Simpsons', 'genre' => 'animation'],
            ['name' => 'The_Wire', 'genre' => 'drama'],
            ['name' => 'The_Witcher', 'genre' => 'fantasy'],
            ['name' => 'Vinland_Saga', 'genre' => 'drama'],
            ['name' => 'Wednesday', 'genre' => 'fantasy'],
            ['name' => 'Fullmetal_Alchemist_Brotherhood', 'genre' => 'anime'],
            ['name' => 'Hunter_X_Hunter', 'genre' => 'anime'],
            ['name' => 'Jujutsu_Kaisen', 'genre' => 'anime'],
            ['name' => 'Cowboy_Bebop', 'genre' => 'anime'],
            ['name' => 'The_Boys', 'genre' => 'action'],
            ['name' => 'Severance', 'genre' => 'drama'],
            ['name' => 'Succession', 'genre' => 'drama'],
            ['name' => 'The_Last_Of_Us', 'genre' => 'drama'],
            ['name' => 'Chernobyl', 'genre' => 'drama'],
            ['name' => 'Dark', 'genre' => 'fantasy'],
            ['name' => 'The_Expanse', 'genre' => 'fantasy'],
            ['name' => 'Wheel_Of_Time', 'genre' => 'fantasy'],
            ['name' => 'His_Dark_Materials', 'genre' => 'fantasy'],
            ['name' => 'Over_The_Garden_Wall', 'genre' => 'animation'],
            ['name' => 'Samurai_Jack', 'genre' => 'animation'],
            ['name' => 'Batman_The_Animated_Series', 'genre' => 'animation'],
            ['name' => 'Mob_Psycho_100', 'genre' => 'anime'],
        ];
       

        foreach($movies as $movie)
            {
               Content::create([
                    'title' => str_replace('_', ' ', $movie['name']),
                    'image_url' => 'images/movies/' . $movie['name'] . '.jpg',
                    'type' => 'movie',
                    'genre' => $movie['genre'],
                    
                ]); 
            }
        foreach($series as $serie)
            {
               Content::create([
                    'title' => str_replace('_', ' ', $serie['name']),
                    'image_url' => 'images/series/' . $serie['name'] . '.jpg',
                    'type' => 'series',
                    'genre' => $serie['genre'],
                ]); 
            }
    }
}
