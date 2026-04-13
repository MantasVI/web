<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>Admin Panel</title>
</head>
<body>
    <nav class="sidebar">
        <hr class="line">
        <div class="title">BBN Admin</div>
        <hr class="line">
        <div class="sidebar-buttons">
            <div class="nav">
                <a class="link" href="/admin">Content List</a>
            </div>
            <div class="nav">
                <a class="link" href="/admin/create">Add New</a>
            </div>
             <div class="nav">
                <a class="link" href="/admin/redirect">Back to Home</a>
            </div>
        </div>
        <hr class="line">
        <div class="log-out">
            <a class="link" href="/logout">Log Out</a>
        </div>
        <hr class="line">
    </nav>

    <div class="main">
        <h2 class="text-white mt-4">All Content</h2>
        <table class="table table-dark table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Image URL</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contents as $content)
                <tr>
                    <td>{{ $content->id }}</td>
                    <td>{{ $content->title }}</td>
                    <td>{{ $content->type }}</td>
                    <td>{{ $content->image_url }}</td>
                    <td>
                        <a href="/admin/edit/{{ $content->id }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/admin/delete/{{ $content->id }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>