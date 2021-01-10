@extends('layouts.managerDashboard')

@section('content')
<div class="main-panel" id="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <form id="addForm" action="{{ URL::route('product.store') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h1 style="color: black;">ADD NEW PRODUCT</h1>
              <div class="form-row">
                <div class="form-group col-md-7">
                <select name="category_id" id="category_id" class="form-control">
                    <option selected="selected">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                </div>
                <br><br><br><br>
                <div class="form-group col-md-7">
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
                </div>
                <br><br><br><br>
                <div class="form-group col-md-7">
                  <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
                </div>
                <br><br><br><br>
                <div class="form-group col-md-7">
                    <input type="number" class="form-control" id="price" name="price" placeholder="Price">
                </div>
                <br><br><br><br>
                <div class="form-group col-md-7">
                    <input type="number" class="form-control" id="cost" name="cost" placeholder="Cost">
                </div>
                <br><br><br><br>
                <input id="input_file" type="file" class="form-control col-md-5" name="product_image" id="product_image">
              </div>
              <br><br>
              <input type="button" id="fire" class="btn btn-primary" value="Add">
            </form>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

  </div>
@endsection
