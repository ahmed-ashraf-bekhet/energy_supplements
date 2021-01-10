@extends('layouts.managerDashboard')

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
                    <th scope="col">Choose Order Status</th>
                    <th scope="col">Choose Branch</th>
                    <th scope="col">Submit</th>
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
                                <select name="status" style="color: orange;" class="form-control">
                                    @if ($order->status==0)
                                        <option value="0" selected>waiting</option>
                                    @else
                                        <option value="0">waiting</option>
                                    @endif

                                    @if ($order->status==1)
                                        <option value="1" selected>pending</option>
                                    @else
                                        <option value="1">pending</option>
                                    @endif

                                    @if ($order->status==2)
                                        <option value="2" selected>confirm</option>
                                    @else
                                        <option value="2">confirm</option>
                                    @endif
                                </select>
                            </th>
                            <th>
                                <select name="branch" style="color: orange;" class="form-control">
                                    @foreach ($branches as $branch)
                                        @if ($branch->id == $order->branch_id)
                                            <option value="{{$branch->id}}" selected>{{$branch->name}}</option>
                                        @else
                                            <option value="{{$branch->id}}">{{$branch->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </th>
                            <th><input class="btn btn-primary" type="submit" value="Submit"></th>
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
