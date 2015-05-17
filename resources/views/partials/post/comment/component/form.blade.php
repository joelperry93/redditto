<hr/>
<h5>Write a new comment</h5>

{!! Form::open() !!}
    <div class="form-group">
   
    {!! Form::text('comment', null, ['class' => 'form-control comment-input']) !!} </div>
    {!! Form::button('Click Me!',[ 'class' => 'btn btn-default']) !!}
{!! Form::close() !!}