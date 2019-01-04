@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-header">Dashboard</div>

                <div class="panel-body">
					<p>{{ $userName }}</p>

					<p>{{ $userDes }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
