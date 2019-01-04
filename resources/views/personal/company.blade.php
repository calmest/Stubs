@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-3 ">
                 <div class="list-group ">
                  <a href="/stubs" class="list-group-item list-group-item-action">My Stubs</a>
                  <a href="/profile" class="list-group-item list-group-item-action">Profile</a>
                  <a href="/company" class="list-group-item list-group-item-action active">Company Information</a>
                  <a href="/employee" class="list-group-item list-group-item-action">Employee Information</a>
                  <a href="/reviews" class="list-group-item list-group-item-action">Reviews</a>


                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Company Information</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                  <div class="form-group row">
                                    <label for="companyname" class="col-4 col-form-label">Company Name*</label>
                                    <div class="col-8">
                                      <input id="companyname" name="companyname" placeholder="Type Company Name Here" class="form-control here" required="required" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="streetaddress" class="col-4 col-form-label">Company Street Address*</label>
                                    <div class="col-8">
                                      <input id="streetaddress" name="streetaddress" placeholder="Type Company Street Address Here" class="form-control here" required="required" type="text">
                                      <small>Example: 555 Abc Street</small>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                        <label for="cityaddress" class="col-4 col-form-label">Company City Address</label>
                                        <div class="col-8">
                                          <input id="cityaddress" name="cityaddress" placeholder="Type Company City Address Here" class="form-control here" type="text">
                                          <small>Example: Jacksonville FL, 32210</small>
                                        </div>
                                    </div>
                                  <div class="form-group row">
                                    <div class="offset-4 col-8">
                                      <button name="submit" type="submit" class="btn btn-primary">Save</button>
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
