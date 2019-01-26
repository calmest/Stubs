@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default" style="padding-right: 3%; padding-left: 3%;">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>To contact us please complete the form below. Thanks!</h3>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group row">
            {{ Form::label('title', 'Name*', ['class' => 'col-2', 'for' => "name"]) }}
            <div class="col-10">
            {{ Form::text('title', '', ['class' => 'form-control here', 'name' => 'name', 'placeholder' => 'Enter Your Name Here', 'required' => 'required']) }}
            </div>
        </div>
        <div class="form-group row">
            {{ Form::label('title', 'Email*', ['class' => 'col-2']) }}
            <div class="col-10">
            {{ Form::email('title', '', ['class' => 'form-control here', 'name' => 'email', 'placeholder' => 'Enter Your Email Here', 'required' => 'required']) }}
            </div>
        </div>
        <div class="form-group row">
            {{ Form::label('title', 'Subject*', ['class' => 'col-2']) }}
            <div class="col-10">
            {{ Form::text('title', '', ['class' => 'form-control here', 'name' => 'subject', 'placeholder' => 'Subject of Enquiry', 'required' => 'required']) }}
            </div>
        </div>
        <div class="form-group row">
            {{ Form::label('title', 'Message*', ['class' => 'col-2']) }}
            <div class="col-10">
            {{ Form::textarea('title', '', ['class' => 'form-control here', 'name' => 'message', 'placeholder' => 'Enter Your Message Here', 'cols' => '50', 'required' => 'required']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-2 col-10">
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
