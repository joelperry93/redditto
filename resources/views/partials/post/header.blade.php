<div class="row">
    <h4 class="col-sm-6">{{ $post->title }}</h4>

    <h5 class="col-sm-6 post-details">
        by <a href="{{ url('@'.$post->user->name) }}">{{ $post->user->name }}</a>
        {{ Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }} to 
        <a href="{{ url('/'.$post->subreddit->name) }}">{{ $post->subreddit->name }}</a>
    </h5>
    <hr>
</div>