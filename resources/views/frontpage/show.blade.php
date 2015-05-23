@extends('app')

@section('content')
	@include('post.partials.list', ['posts' => $posts]);
@endsection
