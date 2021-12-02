<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function index(){
        return view('store.index');
    }
}
