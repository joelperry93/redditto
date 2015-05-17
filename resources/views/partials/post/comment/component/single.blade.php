<li class="comment">
    <div class="profile">
        <!-- <img class="pic" /> -->
        <a href="{{ url('@'.$comment->user->name) }}">
            <span class="username">{{ $comment->user->name }}</span>
        </a>
    </div>
    <p>
        {{ $comment->content }}
    </p>
</li>