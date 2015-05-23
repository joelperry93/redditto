@extends('app')

@section('content')
    <div class="row">
        <h3 class="col-sm-12">{{ $user->name }}</h3>

        <h5>
            Member since {{ Carbon::createFromTimeStamp(strtotime($user->created_at))->diffForHumans() }}
        </h5>

        <hr>
    </div>

    @include('post.partials.list', ['posts' => $user->posts])
@endsection