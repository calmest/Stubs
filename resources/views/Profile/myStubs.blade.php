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
                <a href="/profile" class="list-group-item list-group-item-action">Profile</a>
                <a href="/profile/mystubs" class="list-group-item list-group-item-action active">My Stubs</a>
                <a href="/profile/company" class="list-group-item list-group-item-action">Company Information</a>
                <a href="/profile/employee" class="list-group-item list-group-item-action">Employee Information</a>
                <a href="/reviews/create" class="list-group-item list-group-item-action">Post A Review</a>
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
                                            <th ># Order</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>PDFs</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if (count ($orders) < 1)
                                            <tr>
                                                <td colspan="4">No stubs found</td>
                                            </tr>
                                        @else
                                            @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td class="text-captalize">{{ $order->template_name }}</td>
                                                <td>{{ $order->created_at }}</td>
                                                <td ><a href="{{ url('orders/downloads/' . $order->download_link.'/'.$order->id) }}" class="center btn btn-primary btn-xs" target="_blank">Download Your Stub</a></td>
                                            </tr>
                                            @endforeach

                                        @endif

                                    </tbody>
                                </table>
                                <br>
                                {{ $orders->links() }}
                                </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
