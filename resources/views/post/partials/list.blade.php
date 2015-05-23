<ul class="posts-list">
    @foreach ($posts as $post)
        @include('post.partials.list-item', ['post' => $post])
    @endforeach
</ul>