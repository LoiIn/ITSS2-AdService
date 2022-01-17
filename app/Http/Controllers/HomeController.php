<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Report;
use App\Models\Site;
use App\Models\Advertisement;

class HomeController extends Controller
{
   public function home(){
      return view('welcome');
   }

   public function guideStore(){
      return view('guide_store');
   }

   public function guideUser(){
      return view('guide_user');
   }

   public function clickAds($id, $adId){
      $ad = Report::where('ad_id', $adId)->where('site_id', $id)->first();
      $ad->clicks += 1;
      $ad->save();
      return "success";
   }

   public function showSite($id){
      $site = Site::find($id);
      $ads = $site->ads;
      $reports = $site->reports;

      foreach ($reports as $item) {
         $item->views += 1;
         $item->save();
      }

      return view('site', compact('site', 'ads'));
   }
}
