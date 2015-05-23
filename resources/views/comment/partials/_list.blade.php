@foreach ($comments as $comment)
    @include('comment.partials._single', ['comment' => $comment])

    <ul>
        @include('comment.partials._list', ['comments' => $comment->children()])
    </ul>
@endforeach