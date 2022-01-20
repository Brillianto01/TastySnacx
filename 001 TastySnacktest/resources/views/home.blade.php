@extends('layouts.main')

@section('content')

<div class="title bg-warning text-dark p-2 m-auto">
  <h2 class="text-center">HOME PAGE</h2>
</div>

<div class="d-flex justify-content-evenly flex-wrap ">
  @foreach ($products as $p)

  <div class="card mt-3 mb-2" style="width: 15rem;">
    @if($p->product_id <=10 ) <a href="/snacks/{{$p->product_id}}"><img src="{{$p->product_img}}" class="card-img-top" alt="..."></a>
      @else
      <a href="/snacks/{{$p->product_id}}"><img src="{{asset('storage/'.$p->product_img)}}" class="card-img-top" alt="..."></a>
      @endif
      <div class="card-body">
        <h5 class="card-title text-truncate">{{$p->product_name}} {{$p->product_flavor}}</h5>
        <h6 class="card-subtitle text-muted mt-1">{{$p->brand}}</h6>
        <h6 class="my-2">Rp.{{$p->product_price}} </h6>
        <p class="card-text">Category: <a href="/snacks/category/{{$p->category_id}}">{{$p->category->category_name}} </a></p>
        <p class="card-text">related tags:</p>
        @foreach($p->tags as $tag)
        <a href="/snack/tag/{{$tag->tag_name}}">{{$tag ->tag_name}}</a>
        @endforeach
      </div>
      <a href="/snacks/{{$p->product_id}}" class="btn btn-primary mx-2 my-2">Check Out Product</a>
  </div>
  @endforeach
</div>
<div>
  {{$products->links()}}
</div>


@endsection