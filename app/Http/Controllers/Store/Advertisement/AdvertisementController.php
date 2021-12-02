<?php

namespace App\Http\Controllers\Store\Advertisement;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Store\AdCreateRequest;
use App\Http\Requests\Store\AdUpdateRequest;
use App\Http\Requests\Request;
use App\Models\Advertisement;
use App\Models\Product;

class AdvertisementController extends Controller
{
    public function index(){
      $advertisements = Auth::guard('store')->user()->advertisement()->get();
      return view('store.advertisement.index',compact('advertisements'));
    }

    public function create(){
        $products = Auth::guard('store')->user()->products()->get();
        return view('store.advertisement.create', compact('products'));
    }

    public function store(AdCreateRequest $request){
        $data = $request->except('_token');

        $rs = DB::transaction(function () use ($data, $request){
            $params = [
                'store_id' => Auth::guard('store')->user()->id,
                'title'  => \Arr::get($data, 'title'),
                'content' => \Arr::get($data, 'content'),
                'started_date' => \Arr::get($data, 'started_date'),
                'ended_date'   => \Arr::get($data, 'ended_date'),
            ];

            if ($id = \Arr::get($data, 'product_id')) {
                $id = (int)$id;
                $params['product_id'] = $id;
            }

            if(\Arr::get($data, 'image')) {
                $imageName = '';
                $file = $request->file('image');
                $imagePath = '/asset/images/advertisement';
                $imageName = time()."-".$file->getClientOriginalName();
                $file->move(public_path().$imagePath, $imageName);
                
                $params['image'] = $imageName;
            }

            return Advertisement::create($params);
        });

        if ($rs) {
            return redirect()->route('advertisement.index');
        } else {
            $request->session()->flash('create-fail', 'Add new advertisement failed!');
        }
    }

    public function edit(Request $request, $id) {
        $advertisement = Advertisement::find($id);
        $advertisement->started_date = (explode(' ', $advertisement->started_date))[0];
        $advertisement->ended_date = (explode(' ', $advertisement->ended_date))[0];
        $products = Auth::guard('store')->user()->products()->get();
        return view('store.advertisement.create', compact(['advertisement', 'products']));
    }

    public function update(AdUpdateRequest $request, $id){
        $data = $request->except('_token');

        $params = [
            'title'  => \Arr::get($data, 'title'),
            'content' => \Arr::get($data, 'content'),
            'started_date' => \Arr::get($data, 'started_date'),
            'ended_date'   => \Arr::get($data, 'ended_date'),
        ];

        $advertisement = Advertisement::find($id);

        if ($advertisement->update($params)) {
            return redirect()->route('advertisement.index');
        } else {
            return redirect()->back()->withInput()->with('action-fail', 'Update fail!');
            // $request->session()->flash('add-action-fail', 'Add new advertisement failed!');
        }
    }

    public function remove(Request $request, $id) {
        $advertisement = Advertisement::find($id);
        if ($advertisement->delete()){
            $advertisements = Auth::guard('store')->user()->advertisement()->get();
            $request->session()->flash('action-success', 'The advertisement was deleted!');
            return redirect()->route('advertisement.index', compact('advertisements'));
        } else {
            $request->session()->flash('action-fail', 'delete failed');
            return redirect()->route('advertisement.index');
        }
    }
}
