<h3>{{ $user->name }}</h3>

<h5>
    Member since {{ Carbon::createFromTimeStamp(strtotime($user->created_at))->diffForHumans() }}
</h5>

<hr>

<h4>Posts</h4>
@include('partials.post.list', ['posts' => $user->posts])