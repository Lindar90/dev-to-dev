<?php

namespace App\Http\Controllers;

use App\Filters\ProductFilters;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function products(ProductFilters $productFilters)
    {
        $products = Product::latest()->filter($productFilters)->get();

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
