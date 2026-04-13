<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>Add Content</title>
</head>
<body>
    <nav class="sidebar">
        <hr class="line">
        <div class="title">BBN Admin</div>
        <hr class="line">
        <div class="sidebar-buttons">
            <div class="nav"><a class="link" href="/admin">Content List</a></div>
            <div class="nav"><a class="link" href="/admin/create">Add New</a></div>
        </div>
        <hr class="line">
        <div class="log-out"><a class="link" href="/logout">Log Out</a></div>
        <hr class="line">
    </nav>

    <div class="main">
        <h2 class="text-white mt-4">Add New Content</h2>

        @foreach($errors->all() as $error)
            <p class="text-danger">{{ $error }}</p>
        @endforeach

        <form action="/admin/store" method="POST">
            @csrf
            <div class="mb-3">
                <label class="text-white">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label class="text-white">Type</label>
                <select name="type" class="form-control">
                    <option value="movie">Movie</option>
                    <option value="series">Series</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="text-white">Genre</label>
                <input type="text" name="genre" class="form-control" value="{{ old('genre') }}">
            </div>
            <div class="mb-3">
                <label class="text-white">Image URL</label>
                <input type="text" name="image_url" class="form-control" value="{{ old('image_url') }}">
            </div>
            <button type="submit" class="btn btn-success">Add Content</button>
            <a href="/admin" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>