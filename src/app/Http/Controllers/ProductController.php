<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort');

        if (isset($sort)) {
            $products = Product::orderBy('price', $sort)->paginate(6);
            $appendsParams['sort'] = $sort;
            $products->appends($appendsParams);
        } else {
            $products = Product::paginate(6);
        }

        return view('index', compact('products', 'sort'));
    }
}
