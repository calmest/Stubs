@extends('layouts.app')

@section('content')
<div class="header well" style="margin: 0 auto; width: 100%;">
    <div class="container">
        <h1>Your Profile</h1>
    </div>
</div>
</br></br>
<div class="container">
        <div class="row">
            <div class="col-md-3 ">
                 <div class="list-group ">
                    <a href="/profile" class="list-group-item list-group-item-action active">Profile</a>
                    <a href="/profile/mystubs" class="list-group-item list-group-item-action">My Stubs</a>
                    <a href="/profile/company" class="list-group-item list-group-item-action">Company Information</a>
                    <a href="/profile/employee" class="list-group-item list-group-item-action">Employee Information</a>
                    <a href="/reviews/create" class="list-group-item list-group-item-action">Reviews</a>


                </div>
            </div>
            <div class="col-md-9">
               <style>
                    .panel-default{
                    padding-right: 3% !important;
                    padding-left: 3% !important;
                    }
                    h1{
                        color: #428bca;
                    }
                </style>
                <div class="panel panel-default " >
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Update Profile</h1>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('ProfileUpdate')  }}" method="POST">
                                  <div class="form-group row">
                                    <label for="name" class="col-4 col-form-label">First Name</label>
                                    <div class="col-8">
                                      <input id="name" name="name" placeholder="First Name" class="form-control here" type="text">
                                      <input type="hidden" name="UpdateProfile" value="Profile">
                                    </div>
                                  </div>

                                  {{csrf_field()}}
                                  <div class="form-group row">
                                    <label for="lastname" class="col-4 col-form-label">Last Name</label>
                                    <div class="col-8">
                                      <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email*</label>
                                    <div class="col-8">
                                      <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="offset-4 col-8">
                                      <button  class="btn btn-primary btn-lg">Update Profile</button>
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                                <div class="col-md-12">
                                    <h1 >Update Password</h1>
                                    <hr>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('ProfileUpdate')  }}" method="POST">
                                        <div class="form-group row">
                                            <label for="oldpass" class="col-4 col-form-label">Old Password</label>
                                            <div class="col-8">
                                                <input id="oldpass" name="oldpass"  placeholder="Old Password" class="form-control here" type="password">
                                                <input type="hidden" name="UpdateProfile" value="Password">
                                            </div>
                                            {{csrf_field()}}
                                        </div>
                                        <div class="form-group row">
                                            <label for="newpass" class="col-4 col-form-label">New Password</label>
                                            <div class="col-8">
                                                <input id="newpass" name="newpass"  placeholder="New Password" class="form-control here" type="password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="renewpass" class="col-4 col-form-label">Repeat New Password</label>
                                            <div class="col-8">
                                                <input id="renewpass" name="newpassR"  placeholder="Repeat New Password" class="form-control here" type="password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-4 col-8">
                                                <button name="submit" type="submit" class="btn btn-primary btn-lg">Update Password</button>
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
