<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function buy()
    {
        $products = Product::all();
        return Inertia::render('Buy/Buy', [
            'products' => $products,
        ]);
    }
}
