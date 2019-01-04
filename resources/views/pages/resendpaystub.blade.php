@extends('layouts.app')

@section('content')
    <br>
    <div class="panel panel-default" style="padding-right: 3%; padding-left: 3%;">
        <div class="panel-body">
            <h3>To have your order resent please enter the email address you provided at checkout.</h3>
            <hr>
            <br>
            {!! Form::open(['action' => 'ReviewsController@store', 'method' => 'GET']) !!}
                <div class="form-group">
                    {{ Form::label('email', 'User Email Address:') }}
                    {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Enter User Email']) }}
                </div>
                {{ Form::submit('Resend My Stub', ['class' => 'btn btn-primary btn-lg']) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
