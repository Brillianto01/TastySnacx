<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Tag;
use Illuminate\Http\Request;

class productController extends Controller
{
    public static function viewCategory($category_id)
    {
        $category = ProductCategory::where('category_id', $category_id)->first();
        return view('categories', ['products' => $category->products], ['title' => $category->category_name]);
    }

    public static function index()
    {
        $query = request('search_query');
        $products = Product::where('product_name', 'like', '%' . request('search_query') . '%')->simplePaginate(6);
        return view('categories', ['products' => $products], ['title' => $query]);
        dd($query);
    }
    public static function tags($tag_name)
    {
        $tags = Tag::where('tag_name', 'like', '%' . $tag_name . '%')->first();
        return view('categories', ['products' => $tags->products], ['title' => $tag_name]);
    }

    public static function create()
    {
        return view('addProduct', ['title' => 'Add Product']);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'product_name' => 'required|min:5|max:40',
            'product_flavor' => 'required|min:5|max:40',
            'brand' => 'required|min:2|max:40',
            'product_price' => 'required',
            'product_img' => 'required|image|file|max:5024',
            'product_desc' => 'required|max:255'
        ]);
        if ($request->file('product_img')) {
            $validatedData['product_img'] = $request->file('product_img')->store('product-images');
        }
        Product::create($validatedData);
        $request->session()->flash('success', 'Product Successfully Added');
        return redirect('/home');
    }
}
