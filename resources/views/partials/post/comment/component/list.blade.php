@foreach ($comments as $comment)
    @include('partials.post.comment.component.single', ['comment' => $comment])

    <ul>
        @include('partials.post.comment.component.list', ['comments' => $comment->children()])
    </ul>
@endforeach