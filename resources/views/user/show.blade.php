@extends('app')

@section('content')
    @include('partials.user.profile', ['user' => $user])
@endsection