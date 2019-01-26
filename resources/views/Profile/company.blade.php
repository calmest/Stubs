@extends('layouts.app')

@section('content')
<div class="header well">
        <div class="container">
            <h1>Your Company Info</h1>
        </div>
    </div>
</br></br>
<div class="container">
        <div class="row">
            <div class="col-md-3 ">
                 <div class="list-group ">
                    <a href="/profile" class="list-group-item list-group-item-action">Profile</a>
                    <a href="/profile/mystubs" class="list-group-item list-group-item-action">My Stubs</a>
                    <a href="/profile/company" class="list-group-item list-group-item-action active">Company Information</a>
                    <a href="/profile/employee" class="list-group-item list-group-item-action">Employee Information</a>
                    <a href="/reviews/create" class="list-group-item list-group-item-action">Reviews</a>
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
                                <h1 style="color: #428bca;">Company Information</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('UpdateCompany')  }}" method="POST">

                                  <div class="form-group row">
                                    <label for="companyname" class="col-4 col-form-label">Company Name*</label>
                                    <div class="col-8">
                                      <input id="companyname" name="companyname" placeholder="{{$userDetails->companyname}}" class="form-control here" required="required" type="text">
                                    </div>
                                    {{csrf_field()}}
                                  </div>
                                  <div class="form-group row">
                                    <label for="companystreetaddress" class="col-4 col-form-label">Company Street Address*</label>
                                    <div class="col-8">
                                      <input id="companystreetaddress" name="companystreetaddress" placeholder="{{$userDetails->companystreetaddress}}" class="form-control here" required="required" type="text">
                                      <small>Example: 555 Abc Street</small>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                        <label for="companycityaddress" class="col-4 col-form-label">Company City Address</label>
                                        <div class="col-8">
                                          <input class="form-control here"  id="companycityaddress" name="cityaddress" placeholder="{{$userDetails->companycityaddress}}" type="text">
                                          <br>
                                          <small>Example: Jacksonville FL, 32210</small>
                                        </div>
                                    </div>
                                  <div class="form-group row">
                                    <div class="offset-4 col-8">
                                      <button class="btn btn-primary btn-lg">Save</button>
                                    </div>
                                  </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
