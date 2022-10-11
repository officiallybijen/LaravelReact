<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\product;

class ProductController extends Controller
{
    public function index($id=null)
    {
        return $id?product::find($id):product::latest()->get();
        // if (request('search') != null) {
        //     $products = $products
        //         ->where('name', 'like', '%' . request('search') . '%')
        //         ->orWhere('description', 'like', '%' . request('search') . '%');
        // }
    }
    public function show(product $product)
    {
        return view('product_details', [
            "product" => $product
        ]);
    }
}
