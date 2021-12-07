<?php

namespace App\Http\Controllers\Store\Auth;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use App\Http\Requests\Store\LoginRequest;
use App\Http\Requests\Store\RegisterRequest;
use App\Models\Store;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('store.auth.login');
        }

        $credentials = $request->only(['email', 'password']);

        if (Auth::guard('store')->attempt($credentials)) {
            if(Auth::guard('store')->user()->is_accepted == 1) {
                return redirect()->route('product.index')->with('login-success', '私たちのサービスへようこそ。');
            } else {
                return redirect()->back()->withInput()->with('login-fail', 'ログインに失敗しました。');
            }
        } else {
            return redirect()->back()->withInput()->with('login-fail', 'ログインに失敗しました。');
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('store/login');
    }

    public function getSignUp() {
        return view('store.signup');
    }

    public function signUp(RegisterRequest $request) {
        $data = $request->except('_token');

        $rs = DB::transaction(function () use ($data, $request){                 
            $params = [
                'name' => \Arr::get($data, 'name'),
                'email' => \Arr::get($data, 'email'),
                'password' => Hash::make(\Arr::get($data, 'passord')),
                'address' => \Arr::get($data, 'address'),
                'phone' => \Arr::get($data, 'phone'),
            ]; 

            if(\Arr::get($data, 'logo')) {
                $logoName = '';
                $file = $request->file('logo');
                $logoPath = '/asset/images/store';
                $logoName = time()."-".$file->getClientOriginalName();
                $file->move(public_path().$logoPath, $logoName);
                
                $params['logo'] = $logoName;
            }

            return Store::create($params);
        });

        if($rs) {
            $request->session()->flash('action-success', '登録に成功しました。 ただし、使用する前に、管理者が承認するのを待つ必要があります。');
            return redirect()->route('store.login');
        } else {
            return redirect()->back()->withInput()->with('action-fail', '登録に失敗しました。');
        }
    }
}
