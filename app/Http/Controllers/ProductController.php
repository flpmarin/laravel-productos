<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {   
        $products = Product::all();
        return view('product.index',compact('products'));
    }

    public function create()
    {
        return view(('product.create'));
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route ('product.index');
    }

    public function destroy(Request $request, Product $product)
    {
        $product->delete();
        return redirect()->route ('product.index');
    }
}
