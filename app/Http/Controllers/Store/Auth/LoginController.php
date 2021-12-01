<?php

namespace App\Http\Controllers\Store\Auth;

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
                return redirect()->route('product.index')->with('login-success', 'Welcome our service!');
            } else {
                return redirect()->back()->withInput()->with('login-fail', 'Login fail!');
            }
        } else {
            return redirect()->back()->withInput()->with('login-fail', 'Login fail!');
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
        $data = $request->except(['_token', 'logo']);

        $params = [
            'name' => \Arr::get($data, 'name'),
            'email' => \Arr::get($data, 'email'),
            'password' => Hash::make(\Arr::get($data, 'passord')),
            'address' => \Arr::get($data, 'address'),
            'phone' => \Arr::get($data, 'phone'),
        ]; 

        if($name = $request->get('logo')) {
            $logoName = '';

            if($request->hasFile('logo')){
                $file = $request->file('logo');
                $logoPath = '/uploads/logo/';
                $logoName = time()."-".$file->getClientOriginalName();
                $file->move(public_path().$logoPath, $logoName);
            }

            $params['logo'] = $logoName;
        }

        if(Store::create($params)) {
            return redirect()->route('store.login')->withSuccess('You have signed-in');
        } else {
            return redirect()->back()->withInput()->with('signup-fail', 'Sign up fail!');
        }
    }
}
