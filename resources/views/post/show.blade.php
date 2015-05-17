@extends('app')

@section('content')
    @include('partials.post.header', ['post' => $post])

    <p>{{ $post->content }}</p>

    <hr>

    @include('partials.post.comment.section', ['post' => $post])
@endsection