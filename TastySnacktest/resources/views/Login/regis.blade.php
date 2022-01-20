@extends('layouts.main')

@section('content')

<div class="title bg-warning text-dark p-2 m-auto ">
    <h2 class="text-center">REGISTER</h2>
</div>

<div class="row justify-content-center">
    <div class="col-md-10">
        <main class="form-registration">
            <form action="/register" method="POST">
                @csrf
                <!-- <div class="mb-3">
                    <label for="formFile" class="form-label">Post Profile Picture</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div> -->
                <div class="form-group my-2">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter your full name" required>
                    @error('name')
                    <div class=" invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Enter your email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your Password" required>
                    @error('password')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm your password" required>
                    @error('password_confirmation')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Enter your delivery address" required>
                    @error('address')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <small class="d-block text-center "> Existing User? <a href="/login"> Login </a></small>
                <button class="btn btn-lg btn-primary mb-3" type="submit">Submit</button>
            </form>
        </main>
    </div>
</div>


@endsection