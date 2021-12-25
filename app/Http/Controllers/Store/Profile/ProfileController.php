<?php

namespace App\Http\Controllers\Store\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Store\ProfileUpdateRequest;


class ProfileController extends Controller
{
  public function index(){
    $store = Auth::guard('store')->user();
    $logo = $store->logo;
    $info = [
      "メール" => $store->email,
      "名前" => $store->name,
      "電話番号" => $store->phone,
      "場所" => $store->address
    ];
    return view('store.profile.index',compact('logo','info'));
  }

  public function edit(){
    $store = Auth::guard('store')->user();
    $logo = [
      "label" => "イメージ",
      "value" => $store->logo
    ];
    $info = [
      "email" => ["label" => "メール", "value" => $store->email],
      "name" => ["label" => "名前", "value" => $store->name],
      "phone" => ["label" => "電話番号", "value" => $store->phone],
      "address" => ["label" => "場所", "value" => $store->address]
    ];
    // dd($info);
    return view('store.profile.update', compact('logo','info'));
  }

  public function update(ProfileUpdateRequest $request){
    $data = $request->except('_token');
    $store = Auth::guard('store')->user();

    $rs = DB::transaction(function () use ($store, $data, $request){
      $params = [
        'name' => \Arr::get($data, 'name'),
        'phone' => \Arr::get($data, 'phone'),
        'address'   => \Arr::get($data, 'address'),
      ];

      if(\Arr::get($data, 'image')) {
        $file = $request->file('image');
        $imagePath = '/asset/images/store';
        $imageName = time()."-".$file->getClientOriginalName();
        $file->move(public_path().$imagePath, $imageName);
        $params['logo'] = $imageName;
      }
      return $store->update($params);
    });

    if ($rs) {
      $request->session()->flash('action-success', '新プロフィールの変更に成功しました。');
      return redirect()->route('store.profile.index');
    } else {
      $request->session()->flash('create-fail', '新ロフィールの変更に失敗しました。');
      return redirect()->back()->withInput();
    }
  }

}
