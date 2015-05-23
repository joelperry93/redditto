@extends('app')

@section('content')
    <article class="post row">
        <h4 class="title col-sm-6">{{ $post->title }}</h4>

        <h5 class="col-sm-6 details">
            <a href="{{ url('@'.$post->user->name) }}">
                {{ $post->user->name }}
            </a>

            posted {{ Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }} to

            <a href="{{ url('/'.$post->subreddit->name) }}">
                {{ $post->subreddit->name }}
            </a>
        </h5>

        <hr>
    </article>

    <p>{{ $post->content }}</p>

    <hr>

    @include('comment.partials.section', ['post' => $post])
@endsection