@extends('layouts.dashboard')

@section('content')
<div class="main-panel" id="main-panel">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
      <div class="container-fluid">
        <div class="navbar-wrapper">
            <form>
            <h1 style="color: black;">ADD ORDER</h1>
            <div class="form-row">
                <div class="form-group col-md-6"><br><br>
                    <input id="branch_id" type="hidden" class="form-control" name="branch_id" value="{{Auth::User()->branch_id}}" placeholder="totalNet">
                </div>
            </div>
                <div class="form-group"><br><br>
                    <input value="Add Order Details" data-toggle="modal" data-target="#orderDetails" class="btn btn-dark">
                </div>

                <input value="submit" type="button" id="purchase" class="btn btn-primary">
            </form>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

  </div>
  <div class="modal" id="orderDetails" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Order Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <div class="form-group">
                  <label for="product">Choose Product</label>
                  <select id="products" class="form-control">
                    <option id="default" value="empty" selected="selected">Select Product</option>
                    @foreach ($categories as $category)
                    <optgroup label="{{$category->name}}">
                        @foreach ($category->products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </optgroup>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Quantity</label>
                  <input type="number" class="form-control" id="quantity" placeholder="Quantity">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Total Price</label>
                  <input type="number" class="form-control" id="total_price" placeholder="Total Price">
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="addProduct" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
