@extends('layouts.main')

@section('content')

<div class="title bg-warning text-dark p-2 m-auto ">
    <h2 class="text-center">{{$title}}</h2>
</div>

<div class="row justify-content-center">
    <div class="col-md-10">
        <main class="form-registration">
            <form action="/products/add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group my-2">
                    <label for="category_id">Category</label>
                    <select id="category_id" class="form-control" name="category_id" required>
                        <option id="1" value="1">Snacks</option>
                        <option id="2" value="2">Beverages</option>
                    </select>
                </div>
                <div class="form-group my-2">
                    <label for="product_name">Product Name</label>
                    <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror" id="product_name" placeholder="" required>
                    @error('product_name')
                    <div class=" invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="product_flavor">Product Flavor</label>
                    <input type="text" name="product_flavor" class="form-control @error('product_flavor') is-invalid @enderror" id="product_flavor" placeholder="Enter Product Flavor" required>
                    @error('product_flavor')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="brand">Brand</label>
                    <input type="text" name="brand" class="form-control @error('brand') is-invalid @enderror" id="brand" placeholder="Enter Product Brand" required>
                    @error('brand')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="product_price">Price</label>
                    <input type="number" name="product_price" class="form-control @error('product_price') is-invalid @enderror" id="product_price" placeholder="Enter Product Price" required>
                    @error('brand')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="product_desc">Product Description</label>
                    <textarea id="product_desc" name="product_desc" class="form-control @error('product_desc') is-invalid @enderror" rows="4" cols="50">
                    </textarea>
                </div>
                <div class="form-group mt-4 mb-2">
                    <label for="product_img">Image</label>
                    <input class="form-control @error('product_img') is-invalid @enderror" type="file" id="product_img" name="product_img" required>
                    @error('product_img')
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