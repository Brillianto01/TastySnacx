<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class detailController extends Controller
{
    public static function viewDetail($product_id)
    {
        $detail = Product::where('product_id', $product_id)->first();
        // dd($detail);
        return view('details', ['products' => $detail]);
    }
}
