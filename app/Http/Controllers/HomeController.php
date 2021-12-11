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

   public function testAds($agent, $id){
      $ads = Report::where('id', $id)->first();
      $ads->views += 1;
      $ads->save();   
      return view('testAds',compact(['agent', 'ads']));
   }

   public function clickAds($agent, $id){
      $ads = Report::where('id', $id)->first();
      $ads->clicks += 1;
      $ads->save();
      return view('testAds',compact(['agent', 'ads']));
   }
}
