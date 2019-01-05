@extends('layouts.app')

@section('content')
</br></br>
<div class="container">
        <div class="row">
            <div class="col-md-3 ">
                 <div class="list-group ">
                  <a href="/profile/mystubs" class="list-group-item list-group-item-action">My Stubs</a>
                  <a href="/profile" class="list-group-item list-group-item-action">Profile</a>
                  <a href="/profile/company" class="list-group-item list-group-item-action active">Company Information</a>
                  <a href="/profile/employee" class="list-group-item list-group-item-action">Employee Information</a>
                  <a href="/reviews/create" class="list-group-item list-group-item-action">Reviews</a>


                </div>
            </div>
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
<<<<<<< HEAD
                                <form>
                                  <div class="form-group row">
                                    <label for="companyname" class="col-4 col-form-label">Company Name*</label>
                                    <div class="col-8">
                                      <input id="companyname" name="companyname" placeholder="Type Company Name Here" class="form-control here" required="required" type="text">
                                    </div>
=======
                                <form action="{{ route('UpdateCompany')  }}" method="POST">
                                
                                  <div class="form-group row">
                                    <label for="companyname" class="col-4 col-form-label">Company Name*</label>
                                    <div class="col-8">
                                      <input id="companyname" name="companyname" placeholder="{{$userDetails->companyname}}" class="form-control here" required="required" type="text">
                                    </div>
                                    {{csrf_field()}}
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
                                  </div>
                                  <div class="form-group row">
                                    <label for="companystreetaddress" class="col-4 col-form-label">Company Street Address*</label>
                                    <div class="col-8">
<<<<<<< HEAD
                                      <input id="companystreetaddress" name="companystreetaddress" placeholder="Type Company Street Address Here" class="form-control here" required="required" type="text">
=======
                                      <input id="companystreetaddress" name="companystreetaddress" placeholder="{{$userDetails->companystreetaddress}}" class="form-control here" required="required" type="text">
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
                                      <small>Example: 555 Abc Street</small>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                        <label for="companycityaddress" class="col-4 col-form-label">Company City Address</label>
                                        <div class="col-8">
<<<<<<< HEAD
                                          <input id="companycityaddress" name="cityaddress" placeholder="Type Company City Address Here" class="form-control here" type="text">
=======
                                          <input class="form-control here"  id="companycityaddress" name="cityaddress" placeholder="{{$userDetails->companycityaddress}}" type="text">
                                          <br>
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
                                          <small>Example: Jacksonville FL, 32210</small>
                                        </div>
                                    </div>
                                  <div class="form-group row">
                                    <div class="offset-4 col-8">
<<<<<<< HEAD
                                      <button name="submit" type="submit" class="btn btn-primary btn-lg">Save</button>
                                    </div>
                                  </div>
=======
                                      <button class="btn btn-primary btn-lg">Save</button>
                                    </div>
                                  </div>
                                  
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
