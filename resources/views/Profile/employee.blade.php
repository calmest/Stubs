@extends('layouts.app')

@section('content')
<div class="header well">
        <div class="container">
            <h1>Your Employee Info</h1>
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
                    <a href="/profile/employee" class="list-group-item list-group-item-action active">Employee Information</a>
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
                                <h1 style="color: #428bca;">Employee Information</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                               <form action="{{ route('UpdateEmployee')  }}" method="POST">
                                  <div class="form-group row">
                                    <label for="employeename" class="col-4 col-form-label">Employee Name*</label>
                                    <div class="col-8">
                                      <input id="employeename" name="employeename" placeholder="Type Employee Name Here" class="form-control here" required="required" type="text">
                                    </div>
                                  </div>
                                  {{csrf_field()}}
                                  <div class="form-group row">
                                        <label for="employeestreetaddress" class="col-4 col-form-label">Employee Street Address*</label>
                                        <div class="col-8">
                                          <input id="emstreetaddress" name="emstreetaddress" placeholder="Type Employee Street Address Here" class="form-control here" required="required" type="text">
                                          <small>Example: 555 Abc Street</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="employeecityaddress" class="col-4 col-form-label">Employee City Address</label>
                                        <div class="col-8">
                                            <input id="emcityaddress" name="emcityaddress" placeholder="Type Employee City Address Here" class="form-control here" type="text">
                                            <small>Example: Jacksonville FL, 32210</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ssn" class="col-4 col-form-label">SSN</label>
                                        <div class="col-8">
                                            <input id="ssn" name="ssn" placeholder="1234" class="form-control here" type="number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="employeeid" class="col-4 col-form-label">Employee ID</label>
                                        <div class="col-8">
                                            <input id="employeeid" name="employeeid" placeholder="123" class="form-control here" type="number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <label for="payrate" class="col-4 col-form-label">Pay Rate</label>
                                            <div class="col-8">
                                                <input id="payrate" name="payrate" placeholder="11.4" class="form-control here" type="number">
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="payfrequency" class="col-4 col-form-label">Pay Frequency</label>
                                        <div class="col-8">
                                            <select class="form-control here" id="payfrequency" name="payfrequency">
                                                <option>Weekly</option>
                                                <option>Bi-Weekly</option>
                                                <option>Semi-Monthly</option>
                                                <option>Monthly</option>
                                                <option>Annually</option>
                                            </select>
                                        </div>
                                    </div>
                                  <div class="form-group row">
                                    <div class="offset-4 col-8">
                                      <button  class="btn btn-primary btn-lg">Save</button>
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
