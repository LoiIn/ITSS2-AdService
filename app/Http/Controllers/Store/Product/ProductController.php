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
use App\Models\Report;

class ProductController extends Controller
{
    private $items_number = 3;

    public function index(){
      $products = Auth::guard('store')->user()->products()->orderBy('id', 'DESC')->paginate($this->items_number);
      return view('store.product.index',compact('products'));
    }

    public function create(){
      $categories = Category::all();
      return view('store.product.create', compact('categories'));
    }

    public function store(ProductCreateRequest $request){
        $data = $request->except('_token');

        $rs = DB::transaction(function () use ($data, $request){
          $params = [
            'store_id' => Auth::guard('store')->user()->id,
            'title'  => \Arr::get($data, 'title'),
            'info' => \Arr::get($data, 'info'),
          ];

          if(\Arr::get($data, 'image')) {
            $imageName = '';
            $file = $request->file('image');
            $imagePath = '/asset/images/product';
            $imageName = time()."-".$file->getClientOriginalName();
            $file->move(public_path().$imagePath, $imageName);

            $params['image'] = $imageName;
          }

          $product = Product::create($params);

          if ($categories = \Arr::get($data, 'categories', [])) {

              $product->categories()->attach($categories);
          }

          return $product;
        });

        if ($rs) {
          $request->session()->flash('action-success', '新製品の追加に成功。');
          return redirect()->route('product.index');
        } else {
          $request->session()->flash('action-fail', '新製品の追加に失敗しました。');
          return redirect()->back()->withInput();
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

        $rs = DB::transaction(function () use ($product, $data, $request){
          $params = [
            'title'  => \Arr::get($data, 'title'),
            'info' => \Arr::get($data, 'info'),
          ];

          if(\Arr::get($data, 'image')) {
            $imageName = '';
            $file = $request->file('image');
            $imagePath = '/asset/images/product';
            $imageName = time()."-".$file->getClientOriginalName();
            $file->move(public_path().$imagePath, $imageName);

            $params['image'] = $imageName;
          }

          $product->update($params);

          if ($categories = \Arr::get($data, 'categories', [])) {
              $product->categories()->sync($categories);
          }

          return $product;
        });

        if ($rs) {
            $request->session()->flash('action-success', '商品の編集に成功。');
            return redirect()->route('product.index');
        } else {
            return redirect()->back()->withInput()->with('action-fail', '商品の編集に失敗しました。');
        }
    }

    public function remove(Request $request, $id) {
        $product = Product::find($id);
        if ($product->delete()){
            $adIds = $product->advertisements()->pluck('id');

            // delete ad
            $product->advertisements()->delete();

             // delete report
            $colection = Report::whereIn('ad_id', $adIds)->pluck('id');
            Report::destroy($colection->toArray());

            $request->session()->flash('action-success', '製品を正常に削除しました。');
            return redirect(route('product.index'));
        } else {
          $request->session()->flash('action-success', '削除に失敗しました。');
          return redirect()->route('product.index');
        }
    }

    public function search(Request $request) {
        $products = Auth::guard('store')->user()->products()
        ->where('title','like','%'.$request->search.'%')->orderBy('id', 'DESC')->paginate($this->items_number);
        $products->appends($request->all());
        $mess = $products->total() != 0 ? '' : '結果がありません。';
        $request->session()->flash('no-data', $mess);
        $search = $request->search;
        return view('store.product.index', compact('products', 'search'));
    }
}
