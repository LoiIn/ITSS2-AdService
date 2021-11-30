<?php

namespace App\Http\Controllers\Store\Product;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Store\ProductCreateRequest;
use App\Http\Requests\Store\ProductUpdateRequest;
use App\Http\Requests\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
      $products = Auth::guard('store')->user()->products()->get();
      return view('store.product.index',compact('products'));
    }

    public function create(){
      $categories = Category::all();
      return view('store.product.create', compact('categories'));
    }

    public function store(ProductCreateRequest $request){
        $data = $request->except('_token');

        $rs = DB::transaction(function () use ($data){
          $params = [
            'store_id' => Auth::guard('store')->user()->id,
            'title'  => \Arr::get($data, 'title'),
            'info' => \Arr::get($data, 'info'),
            'image' => 'product.jpg'
          ];

          $product = Product::create($params);

          if ($categories = \Arr::get($data, 'categories', [])) {
              $product->categories()->attach($categories);
          }

          return $product;
        });
        
        if ($rs) {
          return redirect()->route('product.index');
        } else {
          $request->session()->flash('add-action-fail', 'Add new advertisement failed!');
        }
    }

    public function edit($id) {
        $product = Product::find($id);
        $categories = Category::all();
        return view('store.product.create', compact(['product', 'categories']));
    }

    public function update(ProductUpdateRequest $request, $id){
        $data = $request->except('_token');
        $product = Product::find($id);

        $rs = DB::transaction(function () use ($product, $data){
          $params = [
            'title'  => \Arr::get($data, 'title'),
            'info' => \Arr::get($data, 'info'),
          ];

          $product->update($params);

          if ($categories = \Arr::get($data, 'categories', [])) {
              $product->categories()->sync($categories);
          }

          return $product;
        });

        if ($rs) {
            return redirect()->route('product.index');
        } else {
            return redirect()->back()->withInput()->with('action-fail', 'Update fail!');
        }
    }

    public function remove(Request $request, $id) {
        $product = Product::find($id);
        if ($product->delete()){
            $request->session()->flash('action-success', 'The product was deleted!');
            $products = Auth::guard('store')->user()->products()->get();
            return redirect()->route('product.index', compact('products'));
        } else {
            $request->session()->flash('action-fail', 'delete failed');
            return redirect()->route('product.index');
        }
    }
}
