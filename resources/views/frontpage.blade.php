@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel">
				<ul class="posts-list">
					@foreach ($posts as $post)
						<li>
							<a>{{ $post->title }}</a> 
							<span>[{{ $post->subreddit->name }}]</span>
						</li>
						<hr>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
