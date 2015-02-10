@extends('app')

@section('content')
    <h2>Post</h2>

    <hr/>

    {!! Form::open() !!}
        <div class="form-group">
       
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!} </div>
    {!! Form::close() !!}
@stop