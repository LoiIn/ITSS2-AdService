<?php

namespace App\Http\Controllers\Store\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withInput();
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

    public function signUp(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:stores',
            'password' => 'required|min:6',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);
  
        return redirect()->route('store.login')->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return Store::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'address' => $data['address'],
        'phone' => $data['phone'],
      ]);
    } 
}
