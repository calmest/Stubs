@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-3 ">
                 <div class="list-group ">
                  <a href="/stubs" class="list-group-item list-group-item-action">My Stubs</a>
                  <a href="/profile" class="list-group-item list-group-item-action">Profile</a>
                  <a href="/company" class="list-group-item list-group-item-action">Company Information</a>
                  <a href="/employee" class="list-group-item list-group-item-action">Employee Information</a>
                  <a href="/reviews" class="list-group-item list-group-item-action active">Reviews</a>


                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Reviews</h4>
                                <hr>
                            </div>
                        </div>
                        <div class="row" style="margin-top:40px;">
                                <div class="col-md-12">
                                <div class="card-group card">
                                    <div class="float-right card">
                                        <a class="btn btn-primary" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
                                    </div>

                                    <div class="row" id="post-review-box" style="display:none;">
                                        <div class="col-12">
                                            <form accept-charset="UTF-8" action="" method="post">
                                                <input id="ratings-hidden" name="rating" type="hidden">
                                                <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>

                                                <div class="float-right">
                                                    <div class="stars starrr" data-rating="0"></div>
                                                    <a class="btn btn-danger" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                                                    <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                                                    <button class="btn btn-primary" type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
