@extends('front.layouts.master')

@section('content')
    <h2>User Order Details Page</h2>
    <hr>

    <div class="row">

        <div class="col-md-12">
            <h4 class="title"></h4>
            <div class="content table-responsive table-full-width">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th colspan="7">Order Details</th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Address</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $orders->id }}</td>
                        <td>{{ $orders->date }}</td>
                        <td>{{ $orders->address }}</td>
                        <td>
                            @if ($orders->status)
                                <span class="badge badge-success">Confirmed</span>
                            @else
                                <span class="badge badge-warning">Pending</span>
                            @endif
                        </td>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">

            <h4 class="title">User Details</h4>
            <hr>
            <div class="content table-responsive table-full-width">
                <table class="table table-bordered table-striped">
                    <thead>
                    
                    <tr>
                        <th>ID</th>
                        <td>{{ $orders->users->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $orders->users->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $orders->users->email }}</td>
                    </tr>
                    <tr>
                        <th>Registered At</th>
                        <td>{{ $orders->users->created_at->diffForHumans() }}</td>
                    </tr>
                    
                    </thead>
                </table>
            </div>
        </div>
        <div class="col-md-12">

            <h4 class="title">Product Details</h4>
            <hr>
            <div class="content table-responsive table-full-width">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Order ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                    </tr>
                    <tr>
                        <td>{{ $orders->id }}</td>
                        <td>
                            @foreach ($orders->products as $product)
                                <table class="table">
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                    </tr>
                                </table>
                            @endforeach
                        </td>

                        <td>
                            @foreach ($orders->orderItems as $item)
                                <table class="table">
                                    <tr>
                                        <td>{{ $item->price }}</td>
                                    </tr>
                                </table>
                            @endforeach
                        </td>

                        <td>
                            @foreach ($orders->orderItems as $item)
                                <table class="table">
                                    <tr>
                                        <td>{{ $item->quantity }}</td>
                                    </tr>
                                </table>
                            @endforeach
                        </td>

                        <td>
                            @foreach ($orders->products as $product)
                                <table class="table">
                                    <tr>
                                        <td><img src="{{ url('images') . '/' . $product->image }}" alt=""
                                                 style="width: 100px"></td>
                                    </tr>
                                </table>
                            @endforeach
                        </td>
                    </tr>

                </table>

            </div>
        </div>
    </div>

@endsection