@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-3 ">
                 <div class="list-group ">
                  <a href="/stubs" class="list-group-item list-group-item-action">My Stubs</a>
                  <a href="/profile" class="list-group-item list-group-item-action active">Profile</a>
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
                                <h4>Update Profile</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                  <div class="form-group row">
                                    <label for="name" class="col-4 col-form-label">First Name</label>
                                    <div class="col-8">
                                      <input id="name" name="name" placeholder="First Name" class="form-control here" type="text">
                                    </div>
                                  </div>
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
                                      <button name="submit" type="submit" class="btn btn-primary">Update Profile</button>
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                                <div class="col-md-12">
                                    <h4>Update Password</h4>
                                    <hr>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <form>
                                        <div class="form-group row">
                                            <label for="oldpass" class="col-4 col-form-label">Old Password</label>
                                            <div class="col-8">
                                                <input id="oldpass" name="oldpass" placeholder="Old Password" class="form-control here" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="newpass" class="col-4 col-form-label">New Password</label>
                                            <div class="col-8">
                                                <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="renewpass" class="col-4 col-form-label">Repeat New Password</label>
                                            <div class="col-8">
                                                <input id="renewpass" name="newpass" placeholder="Repeat New Password" class="form-control here" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-4 col-8">
                                                <button name="submit" type="submit" class="btn btn-primary">Update Password</button>
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
