@extends('layouts.favorites')
@section('favorites')

    <div class="top">
        <div class="search-bar-container">
            <i style="color: black;" class="fa-solid fa-magnifying-glass"></i>
            <input class="search-bar" placeholder="Type in something">
        </div>
    </div>

    <!-- FAVORITE MOVIES -->
    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name">FAVORITE MOVIES</p>
    </div>
    <div class="title-action">Favorite Movies</div>
    <div class="action-films">
        @foreach($favorites->filter(fn($f) => $f->content->type === 'movie') as $favorite)
            <div class="action-film-container" data-id="{{ $favorite->content_id }}" data-type="{{ $favorite->content->type }}" data-name="{{ $favorite->content->title }}">
                <i class="fa-solid fa-heart"></i>
                <img class="action-film" src="/{{ $favorite->content->image_url }}">
                <p class="action-info">{{ $favorite->content->title }}</p>
            </div>
        @endforeach
    </div>

    <!-- FAVORITE SERIES -->
    <div class="mid">
        <img class="action-picture" src="/images/logo.jpg">
        <p class="action-name">FAVORITE SERIES</p>
    </div>
    <div class="title-action">Favorite Series</div>
    <div class="action-films">
        @foreach($favorites->filter(fn($f) => $f->content->type === 'series') as $favorite)
            <div class="action-film-container" data-id="{{ $favorite->content_id }}" data-type="{{ $favorite->content->type }}" data-name="{{ $favorite->content->title }}">
                <i class="fa-solid fa-heart"></i>
                <img class="action-film" src="/{{ $favorite->content->image_url }}">
                <p class="action-info">{{ $favorite->content->title }}</p>
            </div>
        @endforeach
    </div>

@endsection
