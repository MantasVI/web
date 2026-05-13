@extends('layouts.homeLayout')
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
        @foreach($randomMovies1 as $movie)
        <div class="action-film-container" data-name="{{ $movie->name }}" data-id="{{ $movie->id }}">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="{{ $movie->image_url }}">
            <p class="action-info">{{ $movie->title }}</p>
        </div>
        @endforeach
        @foreach($randomSeries1 as $series)
        <div class="action-film-container" data-name="{{ $series->name }}" data-id="{{ $series->id }}">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="{{ $series->image_url }}">
            <p class="action-info">{{ $series->title }}</p>
        </div>
        @endforeach
    </div>

    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name" style="-webkit-text-stroke: 4px black;">NEW RELEASES</p>
    </div>
    <div class="title-action">Newly Released Movies/Shows</div>
    <div class="action-films">
         @foreach($randomMovies2 as $movie)
        <div class="action-film-container" data-name="{{ $movie->name }}" data-id="{{ $movie->id }}">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="{{ $movie->image_url }}">
            <p class="action-info">{{ $movie->title }}</p>
        </div>
        @endforeach
          @foreach($randomSeries2 as $series)
        <div class="action-film-container" data-name="{{ $series->name }}" data-id="{{ $series->id }}">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="{{ $series->image_url }}">
            <p class="action-info">{{ $series->title }}</p>
        </div>
        @endforeach
    </div>

    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name" style="-webkit-text-stroke: 4px black;">TOP RATED IMDB</p>
    </div>
    <div class="title-action">Top Rated Movies/Series On IMDB</div>
    <div class="action-films">
        @foreach($randomMovies3 as $movie)
        <div class="action-film-container" data-name="{{ $movie->name }}" data-id="{{ $movie->id }}">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="{{ $movie->image_url }}">
            <p class="action-info">{{ $movie->title }}</p>
        </div>
        @endforeach
          @foreach($randomSeries3 as $series)
        <div class="action-film-container" data-name="{{ $series->name }}" data-id="{{ $series->id }}">
            <i class="fa-regular fa-heart"></i>
            <img class="action-film" src="{{ $series->image_url }}">
            <p class="action-info">{{ $series->title }}</p>
        </div>
        @endforeach
    </div>
@endsection