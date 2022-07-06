@extends('layouts.app')

@section('content')
<div class="container">
    <table>
        <thead>
            <tr>
                <td>TITLE</td>
                <td>TEXT</td>
                <td>SLUG</td>
                <td>AZIONI</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->text}}</td>
                <td>{{$post->slug}}</td>
                <td>
                    <a href="" class="btn btn-primary">SHOW</a>
                    <a href="" class="btn btn-success">EDIT</a>
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
