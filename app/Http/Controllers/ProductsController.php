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
        $products = Product::latest();

        if ($brand = $request->input('filters.brands')) {
            $products->where('brand', $brand);
        }

        if ($size = $request->input('filters.sizes')) {
            $products->where('size', $size);
        }

        if ($color = $request->input('filters.colors')) {
            $products->where('color', $color);
        }

        $products = $products->get();

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
