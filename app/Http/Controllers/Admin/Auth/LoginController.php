<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            return view('admin.auth.login');
        }

        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($credentials)) {
            Session::put('login', $credentials);
            return redirect()->route('store.index');
        } else {
            return redirect()->back()->withInput()->with('login-fail', 'ログインに失敗しました。アカウントまたはパスワードが正しくありません。');;
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('admin/login');
    }
}
