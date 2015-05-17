@extends('app')

@section('content')
	<h2>{{ $subreddit->name }}</h2>
	
    @include('partials.post.list', ['posts' => $subreddit->posts])
@endsection
