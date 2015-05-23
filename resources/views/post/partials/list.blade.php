<ul class="posts">
    @foreach ($posts as $post)
        @include('post.partials.list-item', ['post' => $post])
    @endforeach
</ul>