<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function index()
    {
        // $user = Auth::guard('store')->user();
        // echo 'Xin chào Store, '. $user->name;

        return view('store.index');
    }
}
