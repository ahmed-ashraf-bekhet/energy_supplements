@extends('layouts.managerDashboard')

@section('content')
<div class="main-panel" id="main-panel">
    <br><br><br>
    <div class="container">
        <div class="card-deck">
            @foreach ($products as $product)
                <div class="card col-3">
                    <img class="card-img-top" src="{{ $product->image }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->category->name }}</h5>
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p>
                            <em class="item_price">{{$product->price}} L.E.</em><br>
                            <em class="item_price">Available Now <b>{{$product->quantity}}</> Unit</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                        <div class="card-footer">
                            Last Update at {{ $product->updated_at }}
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
@endsection
