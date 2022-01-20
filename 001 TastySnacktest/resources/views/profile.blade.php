@extends('layouts.main')


@section('content')
<div class="title bg-warning text-dark p-2 m-auto">
    <h2 class="text-center">Profile Page</h2>
</div>

<div class="container-xl">
    <div class="row">
        <div class=" col-lg-5 d-flex justify-content-center flex-wrap">
            @if(auth()->user()->profile_img == NULL)
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" class="img-thumbnail mt-4" alt="...">
            @else
            <img src="{{asset('storage/'.$user->profile_img)}}" class="img-thumbnail mt-4" alt="...">
            @endif
        </div>
        <div class="header  col-lg-5 pl-2">
            <div class="card-body">
                <h5 class="card-subtitle my-3 text-dark">Username:</h5>
                <h6 class="card-subtitle mt-3 mb-4 text-dark">{{$user->name}}</h6>
                <h5 class="card-subtitle my-3 text-dark">Email: </h5>
                <h6 class="card-subtitle mt-3 mb-4 text-dark">{{$user->email}}</h6>
                <!-- <hp class="card-subtitle mt-2 text-dark"></hp> -->
                <h5 class="card-subtitle my-3 text-dark">Delivery Address:</h5>
                <h6 class="card-subtitle mt-3 mb-4 text-dark">{{$user->address}}</h6>
                <a href="/profile/update" class="btn btn-outline-primary btn-m my-4 " role="button" aria-pressed="true">Update Profile</a>
            </div>

        </div>
    </div>
</div>
</div>
@endsection