@extends('app')

@section('content')
	<ul class="posts-list">
		@foreach ($posts as $post)
			<li>
				<a>{{ $post->title }}</a> 
			
				<div class="meta-container">
					<div class="meta-component">
						Posted to 
						<a href="{{ url('r', $post->channel->id) }}" class="channel-link">
							[{{ $post->channel->name }}]
						</a>
					</div>
					<div class="meta-component">
						{{ Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}	
					</div>
					<div class="meta-component">
						<i class="fa fa-comments-o"></i>
						{{ $post->commentsCount() }} comments
					</div>
				</div>
			</li>
			<hr>
		@endforeach
	</ul>
@endsection
