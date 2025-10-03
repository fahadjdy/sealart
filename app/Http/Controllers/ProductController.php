<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

   public function index()
    {
        $products = Product::with('category')
            ->orderBy('id', 'desc')
            ->paginate(9); 

        return view('products', compact('products'));
    }


    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product-detail', compact('product'));
    }
}
