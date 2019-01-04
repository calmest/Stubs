@extends('layouts.dash')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-3 ">
                 <div class="list-group ">
                  <a href="/stubs" class="list-group-item list-group-item-action">My Stubs</a>
                  <a href="/profile" class="list-group-item list-group-item-action">Profile</a>
                  <a href="/company" class="list-group-item list-group-item-action">Company Information</a>
                  <a href="/employee" class="list-group-item list-group-item-action">Employee Information</a>
                  <a href="/reviews" class="list-group-item list-group-item-action active">Reviews</a>


                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Post A Review</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row" style="margin-top:40px;">
                                <div class="col-md-12">
                                <div class="">
                                    {!! Form::open(['action' => 'ReviewsController@store', 'method' => 'POST']) !!}
                                    <div class="form-group">

                                        {{ Form::textarea('body', $review->body, ['class' => 'form-control', 'placeholder' => 'Enter Your Review Here']) }}
                                    </div>
                                    {{ Form::hidden('_method', 'PUT') }}
                                    {{ Form::submit('Leave A Review', ['class' => 'btn btn-primary']) }}
                                    {!! Form::close() !!}
                                </div>

                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
