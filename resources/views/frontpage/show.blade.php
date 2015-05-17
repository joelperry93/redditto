@extends('app')

@section('content')
	@include('partials.post.list', ['posts' => $posts]);
@endsection
