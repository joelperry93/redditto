<h5>Comments ({{ $post->comments->count() }})</h5>

@if ($post->comments->count() > 0)
    <ul class="root-comments">
        @include('partials.post.comment.component.list', ['comments' => $post->rootComments])
    </ul>
@else
    <p>:'( no one has commented</p>
@endif

@include('partials.post.comment.component.form', ['post' => $post])