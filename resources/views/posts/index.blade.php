@extends('layouts.app')

@section('content')
    <div class="well">
        <h1>Posts</h1>
    </div>
    <div>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="well">
                <h3><a href="/posts/{{$post->id}}"> {{$post->title}} </a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </div>
            @endforeach
        @else
            <p>No posts found.</p>
        @endif
    </div>
@endsection