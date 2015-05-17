<li>
    <a href="{{ url( ($post->is_link ? $post->content : '/'.$post->subreddit->name.'/post/'.$post->slug)) }}">
        {{ $post->title }}
    </a>
    
    <div class="meta-container">
        <div class="meta-component">
            Posted to <a href="{{ url('/'.$post->subreddit->name) }}">{{ $post->subreddit->name }}</a>
        </div>

        <div class="meta-component">{{ Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}</div>

        <div class="meta-component">
             <!--   <i class="fa fa-comments-o"></i> -->
            <a href="{{ url('/'.$post->subreddit->name.'/post/'.$post->slug) }}">
                {{ $post->comments->count() }} comments
            </a>
        </div>
        
        <div class="meta-component">
            <a href="{{ url('/@'.$post->user->name) }}">
                {{ $post->user->name }}
            </a>
        </div>
    </div>
    <hr>
</li>