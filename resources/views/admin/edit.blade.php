@extends('layouts.editLayout')
@section('edit')

<h2 class="admintext">Edit Content</h2>

        @foreach($errors->all() as $error)
            <p class="error">{{ $error }}</p>
        @endforeach

        <form action="/admin/update/{{ $content->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="titlediv">
                <label class="titleadmin">Title</label>
                <input type="text" name="title" class="titleinput" value="{{ old('title', $content->title) }}">
            </div>
            <div class="titlediv">
                <label class="titleadmin">Type</label>
                <select name="type" class="titleselect">
                    <option value="movie" >Movie</option>
                    <option value="series" >Series</option>
                </select>
            </div>
            <div class="titlediv">
                  <label class="titleadmin">Genre</label>
                <select name="genre" class="titleselect">
                    <option value="action">Action</option>
                    <option value="comedy">Comedy</option>
                    <option value="drama">Drama</option>
                    <option value="horror">Horror</option>
                    <option value="anime">Anime</option>
                    <option value="animation">Animation</option>
                    <option value="fantasy">Fantasy</option>
                </select>
            </div>
            <div class="titlediv">
                <label class="titleadmin">Image URL</label>
                <input type="text" name="image_url" class="titleinput" value="{{ old('image_url', $content->image_url) }}">
            </div>
            <button type="submit" class="adminbutton">Update Content</button>
            <a href="/admin" class="link">Cancel</a>
        </form>
@endsection