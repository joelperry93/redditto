<ul class="comments row">
    @include('comment.partials._tree', ['comments' => $post->rootComments])
</ul>