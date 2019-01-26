@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default" style="padding-right: 3%; padding-left: 3%;">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>We're here to help! Have a question or want to make a comment? Fill out the short form below to contact us.</h3>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group row">
            {{ Form::label('title', 'Name*', ['class' => 'col-3', 'for' => "name"]) }}
            <div class="col-9">
            {{ Form::text('title', '', ['class' => 'form-control here', 'name' => 'name', 'placeholder' => 'Enter Your Name Here', 'required' => 'required']) }}
            </div>
        </div>
        <div class="form-group row">
            {{ Form::label('title', 'Email*', ['class' => 'col-3']) }}
            <div class="col-9">
            {{ Form::email('title', '', ['class' => 'form-control here', 'name' => 'email', 'placeholder' => 'Enter Your Email Here', 'required' => 'required']) }}
            </div>
        </div>
        <div class="form-group row">
            {{ Form::label('title', 'Transaction/Receipt No', ['class' => 'col-3']) }}
            <div class="col-9">
            {{ Form::number('title', '', ['class' => 'form-control here', 'name' => 'transact', 'placeholder' => 'Transaction/receipt Number']) }}
            </div>
        </div>
        <div class="form-group row">
            {{ Form::label('title', 'Phone No', ['class' => 'col-3']) }}
            <div class="col-9">
            {{ Form::number('title', '', ['class' => 'form-control here', 'name' => 'phone', 'placeholder' => 'Phone Number']) }}
            </div>
        </div>
        <div class="form-group row">
            {{ Form::label('title', 'Message*', ['class' => 'col-3']) }}
            <div class="col-9">
            {{ Form::textarea('title', '', ['class' => 'form-control here', 'name' => 'message', 'placeholder' => 'Enter Your Message Here', 'cols' => '50', 'required' => 'required']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-3 col-9">
                {{ Form::submit('Send Message', ['class'=>'btn btn-primary btn-lg', 'name' => 'submit']) }}
            </div>
        </div>
        {!! Form::close() !!}
            </div>
        </div>

    </div>
</div>
</div>

    </div>
@endsection
