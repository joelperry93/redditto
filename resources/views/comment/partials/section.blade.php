<div class="row">
    <h5 class="title col-sm-12">Comments <small>({{ $post->comments->count() }})</small></h5>
</div>


@if ($post->comments->count() > 0)
    @include('comment.partials.comments', ['post' => $post])
@else
    <p>:'( no one has commented</p>
@endif


<hr/>

<div id="new-comment-box">
    <h5>Write a new comment: @{{ comment.text }}</h5>

    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::text('comment', null, [
                'class'   => 'form-control comment', 
                'v-model' => 'comment.text'
            ]) !!}
        </div>

        {!! Form::button('Post comment', [
            'class'  => 'btn btn-default', 
            'v-on'   => 'click: onSubmit', 
            'v-show' => 'comment.text.length'
        ]) !!}

    {!! Form::close() !!}
</div>