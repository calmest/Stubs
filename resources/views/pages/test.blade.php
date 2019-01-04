@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-header">Dashboard</div>

                <div class="panel-body">

                    <form action="/infoTest" method="POST">
                        <div class="container">
                			<div class="row">
                				<div class="col-md-8">
                					<div class="form-group">
                						<input class="form-control" type="text" name="name">
                					</div>
                                    {{csrf_field()}}
                					<div class="form-group">
                						<textarea name="description" id="" cols="30" rows="10">

                					</textarea>
                					</div>
                				</div>
                				<div class="col-md-4"></div>
                			</div>
                		</div>


                		<button class="btn btn-info">Submit</button>
                	</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
