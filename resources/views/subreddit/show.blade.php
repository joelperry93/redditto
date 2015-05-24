@extends('app')

@section('content')
    <div class="row">
	    <h2 class="col-12-sm">{{ $subreddit->name }}</h2>
        @include('post.partials.list', ['posts' => $subreddit->posts])
    </div>
@endsection
