@extends('layouts.app')

@section('content')
<div class="container">
    <table>
        <thead>
            <tr>
                <td>TITLE</td>
                <td>TEXT</td>
                <td>SLUG</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->text}}</td>
                <td>{{$post->slug}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
