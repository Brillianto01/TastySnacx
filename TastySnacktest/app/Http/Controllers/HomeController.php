<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function index()
    {
        return view('home', ['products' => Product::paginate(10)]);
    }
}
