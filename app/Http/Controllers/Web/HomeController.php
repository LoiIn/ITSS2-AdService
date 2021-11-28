<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    public function getIndex(){

      $product = Product::all();
      return view('web.home.content',compact('product'));

    }
}
