<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
      $products = Product::paginate(3);
      return view('store.product.index',compact('products'));
    }
}
