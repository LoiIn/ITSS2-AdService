<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Database\Eloquent\Model;

class HomeController extends Controller
{
    public function home(){
       return view('welcome');
    }

    public function testAds(){
        $ads = Report::all()->last();
        $ads->views += 1;
        $ads->save();

        return view('testAds');
     }

     public function clickAds(){
        $ads = Report::all()->last();
        $ads->clicks += 1;
        $ads->save();

        return view('result');
     }
}
