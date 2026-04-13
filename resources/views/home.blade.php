@extends('layouts.home')
@section('home')
    <div class="top">
        <div class="search-bar-container">
            <i style="color: black;" class="fa-solid fa-magnifying-glass"></i>
            <input class="search-bar" placeholder="Type in something"> 
        </div>
    </div>

    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name" style="-webkit-text-stroke: 4px black;">RECOMMENDED</p>
    </div>
    <div class="title-action">Recommended Movies/Shows</div>
    <div class="action-films">
        <div class="action-film-container" data-name="The Matrix" data-id="40">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/movies/The_Matrix.jpg">
            <p class="action-info">The Matrix</p>
        </div>
        <div class="action-film-container" data-name="The Dark Knight" data-id="36">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/movies/The_Dark_Knight.jpg">
            <p class="action-info">The Dark Knight</p>
        </div>
        <div class="action-film-container" data-name="Spiderman 2" data-id="32">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/movies/Spiderman_2.jpg">
            <p class="action-info">Spiderman 2</p>
        </div>
        <div class="action-film-container" data-name="The Wolf of Wall Street" data-id="44">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/movies/The_Wolf_Of_Wall_Street.jpg">
            <p class="action-info">The Wolf of Wall Street</p>
        </div>
        <div class="action-film-container" data-name="Game Of Thrones" data-id="58">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/series/Game_Of_Thrones.jpg">
            <p class="action-info">Game Of Thrones</p>
        </div>
        <div class="action-film-container" data-name="Breaking Bad" data-id="53">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/series/Breaking_Bad.jpg">
            <p class="action-info">Breaking Bad</p>
        </div>
        <div class="action-film-container" data-name="Better Call Saul" data-id="51">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/series/Better_Call_Saul.jpg">
            <p class="action-info">Better Call Saul</p>
        </div>
        <div class="action-film-container" data-name="Attack on Titan" data-id="48">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/series/Attack_On_Titan.jpg">
            <p class="action-info">Attack on Titan</p>
        </div>
    </div>

    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name" style="-webkit-text-stroke: 4px black;">NEW RELEASES</p>
    </div>
    <div class="title-action">Newly Released Movies/Series</div>
    <div class="action-films">
        <div class="action-film-container" data-name="Harry Potter Deathly Hallows Part 2" data-id="17">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/movies/Harry_Potter_And_The_Deathly_Hollows_Part_2.jpg">
            <p class="action-info">Harry Potter and the Deathly Hollows Part 2</p>
        </div>
        <div class="action-film-container" data-name="Doctor Strange Multiverse of Madness" data-id="10">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/movies/Doctor_Strange_In_The_Multiverse_Of_Madness.jpg">
            <p class="action-info">Doctor Strange in the Multiverse of Madness</p>
        </div>
        <div class="action-film-container" data-name="Five Nights at Freddy's 2" data-id="14">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/movies/Five_Nights_At_Freddys_2.jpg">
            <p class="action-info">Five Nights at Freddy's 2</p>
        </div>
        <div class="action-film-container" data-name="Avatar Fire and Ash" data-id="2">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/movies/Avatar_Fire_And_Ash.jpg">
            <p class="action-info">Avatar: Fire and Ash</p>
        </div>
        <div class="action-film-container" data-name="The Mandalorian" data-id="71">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/series/The_Mandalorian.jpg">
            <p class="action-info">The Mandalorian</p>
        </div>
        <div class="action-film-container" data-name="A Knight Of The Seven Kingdoms" data-id="45">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/series/A_Knight_Of_The_Seven_Kingdoms.jpg">
            <p class="action-info">A Knight Of The Seven Kingdoms</p>
        </div>
        <div class="action-film-container" data-name="Chainsaw Man" data-id="54">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/series/Chainsaw_Man.jpg">
            <p class="action-info">Chainsaw Man</p>
        </div>
        <div class="action-film-container" data-name="Invincible" data-id="61">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/series/Invincable.jpg">
            <p class="action-info">Invincible</p>
        </div>
    </div>

    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name" style="-webkit-text-stroke: 4px black;">TOP RATED IMDB</p>
    </div>
    <div class="title-action">Top Rated Movies/Series On IMDB</div>
    <div class="action-films">
        <div class="action-film-container" data-name="The Dark Knight" data-id="36">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/movies/The_Dark_Knight.jpg">
            <p class="action-info">The Dark Knight</p>
        </div>
        <div class="action-film-container" data-name="The Green Mile" data-id="38">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/movies/The_Green_Mile.jpg">
            <p class="action-info">The Green Mile</p>
        </div>
        <div class="action-film-container" data-name="Spirited Away" data-id="33">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/movies/Spirited_Away.jpg">
            <p class="action-info">Spirited Away</p>
        </div>
        <div class="action-film-container" data-name="The Silence of the Lambs" data-id="43">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/movies/The_Silence_Of_The_Lambs.jpg">
            <p class="action-info">The Silence of the Lambs</p>
        </div>
        <div class="action-film-container" data-name="Arcane" data-id="47">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/series/Arcane.jpg">
            <p class="action-info">Arcane</p>
        </div>
        <div class="action-film-container" data-name="Blue Eye Samurai" data-id="52">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/series/Blue_Eye_Samurai.jpg">
            <p class="action-info">Blue Eye Samurai</p>
        </div>
        <div class="action-film-container" data-name="The Wire" data-id="73">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/series/The_Wire.jpg">
            <p class="action-info">The Wire</p>
        </div>
        <div class="action-film-container" data-name="One Piece" data-id="66">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/images/series/One_Piece.jpg">
            <p class="action-info">One Piece</p>
        </div>
    </div>
@endsection