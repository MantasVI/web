@extends('layouts.series')
@section('series')
    <div class="top">
        <div class="search-bar-container">
            <i style="color: black;" class="fa-solid fa-magnifying-glass"></i>
            <input class="search-bar" placeholder="Type in something"> 
        </div>
    </div>

    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name" style="-webkit-text-stroke: 4px black;">ANIMATION</p>
    </div>
    <div class="title-action">Animated Series</div>
    <div class="action-films">
        @foreach($series->where('genre', 'animation') as $serie)
        <div class="action-film-container" data-name="{{$serie->title}}" data-id="{{$serie['id']}}">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="/{{$serie['image_url']}}"><p class="action-info">{{$serie->title}}</p></a>
        </div>
        @endforeach
        
    </div>

    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name" style="-webkit-text-stroke: 4px black;">DRAMA</p>
    </div>
    <div class="title-action">Drama Series</div>
    <div class="action-films">
        <div class="action-film-container" data-name="Game Of Thrones" data-id="58">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=KPLWWIOCOOQ"><img class="action-film" src="/images/series/Game_Of_Thrones.jpg"><p class="action-info">Game Of Thrones</p></a>
        </div>
        <div class="action-film-container" data-name="Breaking Bad" data-id="53">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=HhesaQXLuRY"><img class="action-film" src="/images/series/Breaking_Bad.jpg"><p class="action-info">Breaking Bad</p></a>
        </div>
        <div class="action-film-container" data-name="Peaky Blinders" data-id="67">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=oVzVdvGIC7U"><img class="action-film" src="/images/series/Peaky_Blinders.jpg"><p class="action-info">Peaky Blinders</p></a>
        </div>
        <div class="action-film-container" data-name="House of the Dragon" data-id="60">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=DotnJ7tTA34"><img class="action-film" src="/images/series/House_Of_The_Dragon.jpg"><p class="action-info">House of the Dragon</p></a>
        </div>
        <div class="action-film-container" data-name="A Knight Of The Seven Kingdoms" data-id="45">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=UPFRItMOgPo"><img class="action-film" src="/images/series/A_Knight_Of_The_Seven_Kingdoms.jpg"><p class="action-info">A Knight Of The Seven Kingdoms</p></a>
        </div>
        <div class="action-film-container" data-name="Better Call Saul" data-id="51">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=HN4oydykJFc"><img class="action-film" src="/images/series/Better_Call_Saul.jpg"><p class="action-info">Better Call Saul</p></a>
        </div>
        <div class="action-film-container" data-name="Band of Brothers" data-id="50">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=KKRBAFlN5ww"><img class="action-film" src="/images/series/Band_Of_Brothers.jpg"><p class="action-info">Band of Brothers</p></a>
        </div>
        <div class="action-film-container" data-name="The Wire" data-id="73">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=1S5khOZ1wBs"><img class="action-film" src="/images/series/The_Wire.jpg"><p class="action-info">The Wire</p></a>
        </div>
    </div>

    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name" style="-webkit-text-stroke: 4px black;">FANTASY</p>
    </div>
    <div class="title-action">Fantasy Series</div>
    <div class="action-films">
        <div class="action-film-container" data-name="Stranger Things" data-id="70">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=mnd7sFt5c3A"><img class="action-film" src="/images/series/Stranger_Things.jpg"><p class="action-info">Stranger Things</p></a>
        </div>
        <div class="action-film-container" data-name="Andor" data-id="46">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=cKOegEuCcfw"><img class="action-film" src="/images/series/Andor.jpg"><p class="action-info">Andor</p></a>
        </div>
        <div class="action-film-container" data-name="The Witcher" data-id="75">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=ndl1W4ltcmg"><img class="action-film" src="/images/series/The_Witcher.jpg"><p class="action-info">The Witcher</p></a>
        </div>
        <div class="action-film-container" data-name="Lord of the Rings The Rings of Power" data-id="63">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=x8UAUAuKNcU"><img class="action-film" src="/images/series/Lord_Of_The_Rings_The_Rings_Of_Power.jpg"><p class="action-info">Lord of the Rings: The Rings of Power</p></a>
        </div>
        <div class="action-film-container" data-name="Wednesday" data-id="77">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=Di310WS8zLk"><img class="action-film" src="/images/series/Wednesday.jpg"><p class="action-info">Wednesday</p></a>
        </div>
        <div class="action-film-container" data-name="The Mandalorian" data-id="71">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=_pa1KLXuW0Y"><img class="action-film" src="/images/series/The_Mandalorian.jpg"><p class="action-info">The Mandalorian</p></a>
        </div>
        <div class="action-film-container" data-name="Lost" data-id="64">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=KTu8iDynwNc"><img class="action-film" src="/images/series/Lost.jpg"><p class="action-info">Lost</p></a>
        </div>
        <div class="action-film-container" data-name="Loki" data-id="62">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=nW948Va-l10"><img class="action-film" src="/images/series/Loki.jpg"><p class="action-info">Loki</p></a>
        </div>
    </div>

    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name" style="-webkit-text-stroke: 4px black;">ANIME</p>
    </div>
    <div class="title-action">Anime Series</div>
    <div class="action-films">
        <div class="action-film-container" data-name="Attack on Titan" data-id="48">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=LV-nazLVmgo"><img class="action-film" src="/images/series/Attack_On_Titan.jpg"><p class="action-info">Attack on Titan</p></a>
        </div>
        <div class="action-film-container" data-name="Naruto Shippuden" data-id="65">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=22R0j8UKRzY"><img class="action-film" src="/images/series/Naruto_Shippuden.jpg"><p class="action-info">Naruto: Shippuden</p></a>
        </div>
        <div class="action-film-container" data-name="One Piece" data-id="66">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=MCb13lbVGE0"><img class="action-film" src="/images/series/One_Piece.jpg"><p class="action-info">One Piece</p></a>
        </div>
        <div class="action-film-container" data-name="Demon Slayer" data-id="56">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=x7uLutVRBfI"><img class="action-film" src="/images/series/Demon_Slayer.jpg"><p class="action-info">Demon Slayer</p></a>
        </div>
        <div class="action-film-container" data-name="Dragonball Z" data-id="57">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=tloraopWVuk"><img class="action-film" src="/images/series/Dragonball_Z.jpg"><p class="action-info">Dragonball Z</p></a>
        </div>
        <div class="action-film-container" data-name="Death Note" data-id="55">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=NlJZ-YgAt-c"><img class="action-film" src="/images/series/Death_Note.jpg"><p class="action-info">Death Note</p></a>
        </div>
        <div class="action-film-container" data-name="Chainsaw Man" data-id="54">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=l96zmDlWCBk"><img class="action-film" src="/images/series/Chainsaw_Man.jpg"><p class="action-info">Chainsaw Man</p></a>
        </div>
        <div class="action-film-container" data-name="Vinland Saga" data-id="76">
            <i class="fa-regular fa-heart"></i>
            <a href="https://www.youtube.com/watch?v=f8JrZ7Q_p-8"><img class="action-film" src="/images/series/Vinland_Saga.jpg"><p class="action-info">Vinland Saga</p></a>
        </div>
    </div>
@endsection