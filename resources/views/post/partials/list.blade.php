<ul class="posts col-sm-12">
    @foreach ($posts as $post)
        @include('post.partials._list-item', compact($post))
    @endforeach
</ul>