<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all(Request $request)
    {
        $products = Product::all();
        return view('home', ['products' => $products]);
    }
}
