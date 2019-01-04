@extends('layouts.app')

@section('content')
<div class="header well">
    <div class="container">
        <h1>Your Pay Stubs</h1>
    </div>
</div>
</br></br>
<div class="container">
        <div class="row">
            <div class="col-md-3 ">
                 <div class="list-group ">
                  <a href="/stubs" class="list-group-item list-group-item-action active">My Stubs</a>
                  <a href="/profile" class="list-group-item list-group-item-action">Profile</a>
                  <a href="/company" class="list-group-item list-group-item-action">Company Information</a>
                  <a href="/employee" class="list-group-item list-group-item-action">Employee Information</a>
                  <a href="/reviews/create" class="list-group-item list-group-item-action">Reviews</a>


                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default" style="padding-right: 3%; padding-left: 3%;">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 style="color: #428bca;">Thank you! Click the link below to download and view your paystubs.</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="content">
                                        <br>

                                        <h5>Contact our support team if there are any issues with your order.</h5>
                                        <br>
                                        <br>
                                            <table class="table table-bordered" width="80%">
                                                <thead>
                                                    <tr>
                                                        <th># Order</th>
                                                        <th>Date</th>
                                                        <th>PDFs</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @if (count ($orders) < 1)
                                                        <tr>
                                                            <td>No stubs found</td>
                                                        </tr>
                                                    @else
                                                        @foreach ($orders as $order)
                                                        <tr>
                                                            <td>{{ $order->id }}</td>
                                                            <td>{{ $order->order_purchased_at }}</td>
                                                            <td>{{ $order->download_link }}</td>
                                                        </tr>
                                                        @endforeach
                                                    @endif

                                                </tbody>
                                            </table>
                                            <br>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
