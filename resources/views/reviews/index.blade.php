@extends('layouts.app')

@section('content')

    <br>
    @if(count($reviews) > 0)
        @foreach ($reviews as $review)
            <div class="panel panel-default" style="padding:2%; margin:2%;">
                <h3><u>{{ $review->name }}</u></h3>
                <p>{{ $review->body }}</p>
                <small>Posted on {{ $review->created_at }} by {{ $review->name }}</small>
            </div>
        @endforeach
        {{ $reviews->links() }}
    @else
        <p>No reviews found</p>
    @endif
@endsection
