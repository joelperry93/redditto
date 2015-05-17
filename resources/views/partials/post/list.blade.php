<ul class="posts-list">
    @foreach ($posts as $post)
        @include('partials.post.list-item', ['post' => $post])
    @endforeach
</ul>