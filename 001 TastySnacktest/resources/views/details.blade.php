@extends('layouts.main')


@section('content')
<div class="title bg-warning text-dark p-2 m-auto">
    <h2 class="text-center">PRODUCT DETAILS</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5 col-lg-5 mt-4">
            <div class="card mt-3 p-2" style="width: 30rem;">
                @if($products->product_id <=10 ) <a href="/snacks/{{$products->product_id}}"><img src="{{$products->product_img}}" class="card-img-top" alt="..."></a>
                    @else
                    <a href="/snacks/{{$products->product_id}}"><img src="{{asset('storage/'.$products->product_img)}}" class="card-img-top" alt="..."></a>
                    @endif
            </div>
        </div>
        <div class="header col-md-5 col-lg-5 pl-2 mt-4">
            <!-- <div class="card" style="width: 47rem;"> -->
            <div class="card-body">
                <h1>{{$products->product_name}} {{$products->product_flavor}}</h1>
                <h4 class="card-subtitle my-5 text-dark">Brand: {{$products->brand}}</h4>
                <h5 class="card-subtitle my-5 text-muted">{{$products->product_desc}}</h5>
                <h4 class="card-subtitle my-5 text-dark">Rp.{{$products->product_price}},00-</h4>
                @auth
                <div class="qty mt-3">
                    <input type="number" class="count" name="quantity" value="1">
                    <button class="btn-white">
                        <a href="#" class="px-2 link-dark"> Add to Cart
                            <i class="bi bi-cart-plus-fill"></i>
                        </a>
                    </button>
                </div>
                @endauth
            </div>
            <!-- </div> -->
        </div>
    </div>
</div>
</div>
@endsection