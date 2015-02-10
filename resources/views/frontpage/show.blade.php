@extends('app')

@section('content')
	<ul class="posts-list">
		@foreach ($posts as $post)
			<li>
				<a>{{ $post->title }}</a> 
			
				<div class="meta-container">
					Posted to 
					<a href="{{ url('r', $post->subreddit->id) }}" class="subreddit-link">
						[{{ $post->subreddit->name }}]
					</a>
					
					<i class="fa fa-comments-o"></i>
					{{ $post->commentsCount() }} comments
				</div>
			</li>
			<hr>
		@endforeach
	</ul>
@endsection
