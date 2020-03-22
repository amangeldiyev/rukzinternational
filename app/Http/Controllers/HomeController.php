<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        return view('home', compact('products'));
    }

    public function category(Category $category)
    {
        return view('category', ['products' => $category->products]);
    }

    public function product(Category $category, Product $product)
    {
        return view('product', compact('product'));
    }
}
