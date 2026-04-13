@extends('layouts.movies')
@section('movies')
    <div class="top">
        <div class="search-bar-container">
            <i style="color: black;" class="fa-solid fa-magnifying-glass"></i>
            <input class="search-bar" placeholder="Type in something"> 
        </div>
    </div>

    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name" style="-webkit-text-stroke: 4px black;">ACTION</p>
    </div>
    <div class="title-action">Action Movies</div>
    <div class="action-films">
        <div class="action-film-container" data-name="Avengers Endgame" data-id="4">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=TcMBFSGVi1c"><img class="action-film" src="/images/movies/Avengers_Endgame.jpg"><p class="action-info">Avengers Endgame</p></a>
        </div>
        <div class="action-film-container" data-name="The Dark Knight" data-id="36">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=K83hME5OKws"><img class="action-film" src="/images/movies/The_Dark_Knight.jpg"><p class="action-info">The Dark Knight</p></a>
        </div>
        <div class="action-film-container" data-name="Spiderman 2" data-id="32">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=1s9Yln0YwCw"><img class="action-film" src="/images/movies/Spiderman_2.jpg"><p class="action-info">Spiderman 2</p></a>
        </div>
        <div class="action-film-container" data-name="Lord of the Rings" data-id="24">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=V75dMMIW2B4"><img class="action-film" src="/images/movies/Lord_Of_The_Rings_The_Return_Of_The_King.jpg"><p class="action-info">Lord of the Rings: The Return of the King</p></a>
        </div>
        <div class="action-film-container" data-name="Mad Max Fury Road" data-id="26">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=hEJnMQG9ev8"><img class="action-film" src="/images/movies/Mad_Max_Fury_Road.jpg"><p class="action-info">Mad Max Fury Road</p></a>
        </div>
        <div class="action-film-container" data-name="John Wick Chapter 2" data-id="22">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=XGk2EfbD_Ps"><img class="action-film" src="/images/movies/John_Wick_Chapter_2.jpg"><p class="action-info">John Wick Chapter 2</p></a>
        </div>
        <div class="action-film-container" data-name="John Wick Chapter 4" data-id="23">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=qEVUtrk8_B4"><img class="action-film" src="/images/movies/John_Wick_Chapter_4.jpg"><p class="action-info">John Wick Chapter 4</p></a>
        </div>
        <div class="action-film-container" data-name="The Matrix" data-id="40">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=vKQi3bBA1y8"><img class="action-film" src="/images/movies/The_Matrix.jpg"><p class="action-info">The Matrix</p></a>
        </div>
    </div>

    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name" style="-webkit-text-stroke: 4px black;">FANTASY</p>
    </div>
    <div class="title-action">Fantasy Movies</div>
    <div class="action-films">
        <div class="action-film-container" data-name="Harry Potter Deathly Hallows Part 2" data-id="17">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=5NYt1qirBWg"><img class="action-film" src="/images/movies/Harry_Potter_And_The_Deathly_Hollows_Part_2.jpg"><p class="action-info">Harry Potter and the Deathly Hollows Part 2</p></a>
        </div>
        <div class="action-film-container" data-name="Doctor Strange" data-id="9">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=h7gvFravm4A"><img class="action-film" src="/images/movies/Doctor_Strange.jpg"><p class="action-info">Doctor Strange</p></a>
        </div>
        <div class="action-film-container" data-name="Avatar Fire and Ash" data-id="2">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=nb_fFj_0rq8"><img class="action-film" src="/images/movies/Avatar_Fire_And_Ash.jpg"><p class="action-info">Avatar: Fire and Ash</p></a>
        </div>
        <div class="action-film-container" data-name="Avatar The Way of Water" data-id="3">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=d9MyW72ELq0"><img class="action-film" src="/images/movies/Avatar_The_Way_Of_Water.jpg"><p class="action-info">Avatar: The Way of Water</p></a>
        </div>
        <div class="action-film-container" data-name="Doctor Strange Multiverse of Madness" data-id="10">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=aWzlQ2N6qqg"><img class="action-film" src="/images/movies/Doctor_Strange_In_The_Multiverse_Of_Madness.jpg"><p class="action-info">Doctor Strange in the Multiverse of Madness</p></a>
        </div>
        <div class="action-film-container" data-name="Black Panther" data-id="6">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=xjDjIWPwcPU"><img class="action-film" src="/images/movies/Black_Panther.jpg"><p class="action-info">Black Panther</p></a>
        </div>
        <div class="action-film-container" data-name="The Green Mile" data-id="38">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=Ki4haFrqSrw"><img class="action-film" src="/images/movies/The_Green_Mile.jpg"><p class="action-info">The Green Mile</p></a>
        </div>
        <div class="action-film-container" data-name="Spirited Away" data-id="33">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=ByXuk9QqQkk"><img class="action-film" src="/images/movies/Spirited_Away.jpg"><p class="action-info">Spirited Away</p></a>
        </div>
    </div>

    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name" style="-webkit-text-stroke: 4px black;">HORROR</p>
    </div>
    <div class="title-action">Horror Movies</div>
    <div class="action-films">
        <div class="action-film-container" data-name="Scream" data-id="28">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=U0LETmDvuXc"><img class="action-film" src="/images/movies/Scream.jpg"><p class="action-info">Scream</p></a>
        </div>
        <div class="action-film-container" data-name="The Shining" data-id="42">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=S014oGZiSdI"><img class="action-film" src="/images/movies/The_Shining.jpg"><p class="action-info">The Shining</p></a>
        </div>
        <div class="action-film-container" data-name="Halloween 2" data-id="16">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=8uJt9QG9rj8"><img class="action-film" src="/images/movies/Halloween_2.jpg"><p class="action-info">Halloween 2</p></a>
        </div>
        <div class="action-film-container" data-name="Five Nights At Freddy's" data-id="13">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=0VH9WCFV6XQ"><img class="action-film" src="/images/movies/Five_Nights_At_Freddys.jpg"><p class="action-info">Five Nights At Freddy's</p></a>
        </div>
        <div class="action-film-container" data-name="Five Nights at Freddy's 2" data-id="14">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=dSDpoobO6yM"><img class="action-film" src="/images/movies/Five_Nights_At_Freddys_2.jpg"><p class="action-info">Five Nights at Freddy's 2</p></a>
        </div>
        <div class="action-film-container" data-name="Alien Covenant" data-id="1">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=svnAD0TApb8"><img class="action-film" src="/images/movies/Alien_Covenant.jpg"><p class="action-info">Alien: Covenant</p></a>
        </div>
        <div class="action-film-container" data-name="The Silence of the Lambs" data-id="43">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=6iB21hsprAQ"><img class="action-film" src="/images/movies/The_Silence_Of_The_Lambs.jpg"><p class="action-info">The Silence of the Lambs</p></a>
        </div>
        <div class="action-film-container" data-name="Jaws" data-id="21">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=WKuZJjPSLXQ"><img class="action-film" src="/images/movies/Jaws.jpg"><p class="action-info">Jaws</p></a>
        </div>
    </div>

    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name" style="-webkit-text-stroke: 4px black;">COMEDY</p>
    </div>
    <div class="title-action">Comedy Movies</div>
    <div class="action-films">
        <div class="action-film-container" data-name="Home Alone" data-id="18">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=jEDaVHmw7r4"><img class="action-film" src="/images/movies/Home_Alone.jpg"><p class="action-info">Home Alone</p></a>
        </div>
        <div class="action-film-container" data-name="Dumb and Dumber" data-id="11">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=l13yPhimE3o"><img class="action-film" src="/images/movies/Dumb_And_Dumber.jpg"><p class="action-info">Dumb & Dumber</p></a>
        </div>
        <div class="action-film-container" data-name="The Hangover Part 2" data-id="39">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=ohF5ZO_zOYU"><img class="action-film" src="/images/movies/The_Hangover_Part_2.jpg"><p class="action-info">The Hangover Part II</p></a>
        </div>
        <div class="action-film-container" data-name="Superbad" data-id="34">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=4eaZ_48ZYog"><img class="action-film" src="/images/movies/Superbad.jpg"><p class="action-info">Superbad</p></a>
        </div>
        <div class="action-film-container" data-name="Shaft" data-id="30">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=lD41XdWcmbY"><img class="action-film" src="/images/movies/Shaft.jpg"><p class="action-info">Shaft</p></a>
        </div>
        <div class="action-film-container" data-name="Borat" data-id="7">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=ZN-dGVbCjLI"><img class="action-film" src="/images/movies/Borat.jpg"><p class="action-info">Borat</p></a>
        </div>
        <div class="action-film-container" data-name="The Wolf of Wall Street" data-id="44">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=iszwuX1AK6A"><img class="action-film" src="/images/movies/The_Wolf_Of_Wall_Street.jpg"><p class="action-info">The Wolf of Wall Street</p></a>
        </div>
        <div class="action-film-container" data-name="Shrek" data-id="31">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=CwXOrWvPBPk"><img class="action-film" src="/images/movies/Shrek.jpg"><p class="action-info">Shrek</p></a>
        </div>
    </div>
@endsection