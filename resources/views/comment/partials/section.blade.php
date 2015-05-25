<div class="row">
    <h5 class="title col-sm-12">Comments <small>({{ $post->comments->count() }})</small></h5>
</div>


@if ($post->comments->count() > 0)
    @include('comment.partials.comments', ['post' => $post])
@else
    <p>:'( no one has commented</p>
@endif


<hr/>
<h5>Write a new comment</h5>

{!! Form::open() !!}
    <div class="form-group">
        {!! Form::text('comment', null, ['class' => 'form-control comment']) !!}
    </div>

    {!! Form::button('Click Me!',[ 'class' => 'btn btn-default']) !!}
{!! Form::close() !!}