<div class="row">
    <h5 class="title col-sm-12">Comments ({{ $post->comments->count() }})</h5>
</div>


@if ($post->comments->count() > 0)
    <ul class="root-comments row">
        @include('comment.partials._list', ['comments' => $post->rootComments])
    </ul>
@else
    <p>:'( no one has commented</p>
@endif

@include('comment.partials._form', ['post' => $post])