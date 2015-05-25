@foreach ($comments as $comment)
    @include('comment.partials._comment', ['comment' => $comment])

    <ul>
        @include('comment.partials._tree', ['comments' => $comment->children()])
    </ul>
@endforeach