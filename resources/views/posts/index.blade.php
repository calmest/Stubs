@extends('layouts.app')

@section('content')
    <br>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class = "panel panel-default" style="padding:2%; margin:2%;">
                <div class="row panel-body">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%;" src="/storage/cover_images/{{ $post->cover_image }}" />
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                        <small>Written on {{ $post->created_at }}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
            <p> No posts found </p>
    @endif
@endsection
