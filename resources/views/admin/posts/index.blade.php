@extends('layouts.app')

@section('content')
<div class="container">
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>TITLE</td>
                <td>TEXT</td>
                <td>AZIONI</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->text}}</td>
                <td>
                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">SHOW</a>
                    <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-success">EDIT</a>
                    <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
