@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-3 ">
                 <div class="list-group ">
                  <a href="/stubs" class="list-group-item list-group-item-action active">My Stubs</a>
                  <a href="/profile" class="list-group-item list-group-item-action">Profile</a>
                  <a href="/company" class="list-group-item list-group-item-action">Company Information</a>
                  <a href="/employee" class="list-group-item list-group-item-action">Employee Information</a>
                  <a href="/reviews" class="list-group-item list-group-item-action">Reviews</a>


                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Stubs</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <small>You haven't bought any stubs yet.</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
