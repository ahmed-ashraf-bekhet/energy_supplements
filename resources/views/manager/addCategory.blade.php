@extends('layouts.managerDashboard')

@section('content')
<div class="main-panel" id="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <form id="addForm" action="{{ URL::route('add_category') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h1 style="color: black;">ADD NEW CATEGORY</h1>
            <div class="form-row">
                <div class="form-group col-md-7">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
                </div>
            </div>
            <br><br><br>
            <input type="submit" id="fire" class="btn btn-primary" value="Add">
          </form>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

  </div>
@endsection
