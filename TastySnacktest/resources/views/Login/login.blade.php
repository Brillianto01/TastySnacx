@extends('layouts.main')

@section('content')

<div class="title bg-warning text-dark p-2 m-auto ">
    <h2 class="text-center">LOGIN</h2>
</div>


<div class="row justify-content-center">
    <div class="col-md-5">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>{{session('success')}}</strong> you can login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(session()->has('failed'))
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <strong>{{session('failed')}}</strong> Login Unsuccessful
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <form class="mx-5 my-3" action="/login" method="POST">
            @csrf
            <div class="form-group my-2">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Enter your email" required autofocus>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group my-2">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your Password" required autofocus>
                @error('password')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <small class="d-block text-center "> Not Registered? <a href="/register"> Register Now!</a></small>
            <button type="submit" class="btn btn-lg btn-primary mb-3">Submit</button>
        </form>
    </div>
</div>
@endsection