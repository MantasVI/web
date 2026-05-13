@extends('layouts.adminLayout')
@section('admin')

<h2 class="titleadmin">All Content</h2>
        <table class="admintable">
            <thead>
                <tr>
                    <th class='tid'>ID</th>
                    <th class='titleid'>Title</th>
                    <th class = 'ttype'>Type</th>
                    <th class ='turl'>Image URL</th>
                    <th class='tgenre'>Genre</th>
                    <th class='tactions'>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contents as $content)
                <tr>
                    <td class='tid'>{{ $content->id }}</td>
                    <td class='titleid'>{{ $content->title }}</td>
                    <td class = 'ttype'>{{ $content->type }}</td>
                    <td class ='turl'>{{ $content->image_url }}</td>
                    <td class='tgenre'>{{ $content->genre }}</td>
                    <td class='tactions'>
                        <a href="/admin/edit/{{ $content->id }}" class="adminbutton">Edit</a>
                        <form action="/admin/delete/{{ $content->id }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="adminbutton1">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</html>
@endsection