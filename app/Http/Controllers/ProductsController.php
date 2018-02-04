<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function products(Request $request)
    {
        $filters = $request->input('filters', []);

        $products = Product::all();

        return [
            'filters'  => [
                'brands' => $products->unique('brand')->pluck('brand'),
                'sizes'  => $products->unique('size')->pluck('size'),
                'colors' => $products->unique('color')->pluck('color'),
            ],
            'products' => $products,
        ];
    }
}
