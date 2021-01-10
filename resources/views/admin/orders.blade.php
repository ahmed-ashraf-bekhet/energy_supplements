@extends('layouts.dashboard')

@section('content')
<div class="main-panel" id="main-panel">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
      <div class="container-fluid">
        <div class="navbar-wrapper">
            <table class="table table-bordered table-dark">
                <thead>
                  <tr>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Customer Phone</th>
                    <th scope="col">Customer Address</th>
                    <th scope="col">Order Time</th>
                    <th scope="col">Order Details</th>
                    <th scope="col">Confirm Order</th>
                  </tr>
                </thead>
                <tbody id="details">
                    @foreach ($orders as $order)
                        <tr>
                            <th>{{$order->customer->name}}</th>
                            <th>{{$order->customer->phone}}</th>
                            <th>{{$order->customer->address}}</th>
                            <th>{{$order->created_at}}</th>
                            <th>
                                <!-- Button trigger modal -->
                                <button data-id="{{$order->id}}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderDetails">
                                    Details
                                </button>
                            </th>
                            <form action="{{ URL::route('order.update',$order->id) }}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PUT">
                                <th>
                                    <input type="hidden" value="2" name="status">
                                    <input type="hidden" value="{{$order->branch_id}}" name="branch">
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                </th>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
      </div>
    </nav>
</div>


@endsection
