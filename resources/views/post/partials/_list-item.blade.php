<li class="col-md-6 col-sm-12">
    <img />

    <a href="{{ url( ($post->is_link ? $post->content : '/'.$post->subreddit->name.'/'.$post->slug)) }}">
        {{ $post->title }}
    </a>

    <small class="vote-count">{{ $post->votes() }}</small>

    <div class="meta">
        <div class="meta-component">
            <a href="{{ url('/@'.$post->user->name) }}">{{ $post->user->name }}</a>
            posted to <a href="{{ url('/'.$post->subreddit->name) }}">{{ $post->subreddit->name }}</a>
        </div>

        <div class="meta-component">{{ Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}</div>

        <div class="meta-component">
            <!--   <i class="fa fa-comments-o"></i> -->
            <a href="{{ url('/'.$post->subreddit->name.'/'.$post->slug) }}">
                {{ $post->comments->count() }} comments
            </a>
        </div>
    </div>

    <hr>
</li>