<li class="comment row">
    <div class="profile col-sm-6">
        <a href="{{ url('@'.$comment->user->name) }}">
            <div class="username">{{ $comment->user->name }}</div>
        </a>
    </div>

    <div class="time col-sm-6">
        {{ Carbon::createFromTimeStamp(strtotime($comment->created_at))->diffForHumans() }}
    </div>

    <p class="col-sm-12">{{ $comment->content }}</p>

    <ul class="actions list-inline col-sm-12">
        <li><span class="vote-count">{{ $comment->votes() }}</span></li>
        <li><a>reply</a></li>
        <li><a>report</a></li>
        <li><a>permalink</a></li>
    </ul>
</li>
