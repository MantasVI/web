<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>Edit Content</title>
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
        <h2 class="text-white mt-4">Edit Content</h2>

        @foreach($errors->all() as $error)
            <p class="text-danger">{{ $error }}</p>
        @endforeach

        <form action="/admin/update/{{ $content->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="text-white">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $content->title) }}">
            </div>
            <div class="mb-3">
                <label class="text-white">Type</label>
                <select name="type" class="form-control">
                    <option value="movie" {{ $content->type === 'movie' ? 'selected' : '' }}>Movie</option>
                    <option value="series" {{ $content->type === 'series' ? 'selected' : '' }}>Series</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="text-white">Image URL</label>
                <input type="text" name="image_url" class="form-control" value="{{ old('image_url', $content->image_url) }}">
            </div>
            <button type="submit" class="btn btn-warning">Update Content</button>
            <a href="/admin" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>