<li class="comment">
    <div class="profile">
        <!-- <img class="pic" /> -->
        <a href="{{ url('@'.$comment->user->name) }}">
            <div class="comment-username">{{ $comment->user->name }}</div>
        </a>
        
        <div class="comment-datetime">{{ Carbon::createFromTimeStamp(strtotime($comment->created_at))->diffForHumans() }}</div>
    </div>

    <p class="comment-content">
        {{ $comment->content }}
    </p>

    <div class="comment-actions-container">
        <ul class="comment-actions-list list-inline">
            <li class="comment-actions-list-item"><a>reply</a></li>
            <li><a>report</a></li>
            <li><a>permalink</a></li>
        </ul>    
    </div>
</li>
