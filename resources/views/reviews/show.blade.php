@extends('layouts.apps')

@section('content')
    <a href="/profile" class="btn btn-default">Go Back</a>
    <h1>REVIEW PREVIEW</h1>
    <br>
    <div>
        {{ $review->body }}
    </div>
    <small>Posted on {{ $review->created_at }}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $review->user_id)
        <a href="/reviews/{{ $review->id }}/edit" class="btn btn-default">Edit</a>

        {!! Form::open(['action' => ['ReviewsController@destroy', $review->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
        @endif
    @endif
@endsection
