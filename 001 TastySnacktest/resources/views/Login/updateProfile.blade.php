@extends('layouts.main')

@section('content')

<div class="title bg-warning text-dark p-2 m-auto ">
    <h2 class="text-center">{{$title}}</h2>
</div>

<div class="row justify-content-center">
    <div class="col-md-10 mt-5">
        <main class="form-registration">
            <form action="/profile/update" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group my-3">
                    <label for="name">Full Name</label>
                    <input type="text" value="{{auth()->user()->name}}" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="If you dont want to change it, leave it blank">

                </div>
                <div class=" form-group my-3">
                    <label for="email">Email address</label>
                    <input type="email" value="{{auth()->user()->email}}" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="If you dont want to change it, leave it blank">
                </div>
                <div class="form-group my-3">
                    <label for="address">Address</label>
                    <input type="text" value="{{auth()->user()->address}}" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="If you dont want to change it, leave it blank">

                </div>
                <div class="form-group mt-4 mb-2">
                    <label for="profile_img">Image</label>
                    <input class="form-control @error('profile_img') is-invalid @enderror" type="file" id="profile_img" name="profile_img">
                    @error('product_img')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <button class="btn btn-lg btn-primary mb-3" type="submit">Submit</button>
            </form>
        </main>
    </div>
</div>


@endsection