@extends('layouts.app')

@section('content')
<div class="header well">
        <div class="container">
            <h1>Your Reviews</h1>
        </div>
    </div>
</br></br>
<div class="container">
        <div class="row">
            <div class="col-md-3 ">
                 <div class="list-group ">
                    <a href="/profile" class="list-group-item list-group-item-action">Profile</a>
                    <a href="/profile/mystubs" class="list-group-item list-group-item-action">My Stubs</a>
                    <a href="/profile/company" class="list-group-item list-group-item-action">Company Information</a>
                    <a href="/profile/employee" class="list-group-item list-group-item-action">Employee Information</a>
                    <a href="/reviews/create" class="list-group-item list-group-item-action active">Reviews</a>
                </div>
            </div>
            <style>
                h1{
                    color: #428bca;
                }
            </style>
            <div class="col-md-9">
                <div class="panel panel-default" style="padding-right: 3%; padding-left: 3%;">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 style="color: #428bca;">Post A Review</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row" style="margin-top:40px;">
                                <div class="col-md-12">
                                <div class="">
                                    {!! Form::open(['action' => 'ReviewsController@store', 'method' => 'POST']) !!}
                                    <div class="form-group">
                                        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Name Here']) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Review Here']) }}
                                    </div>
                                    {{ Form::submit('Leave A Review', ['class' => 'btn btn-primary btn-lg']) }}
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
