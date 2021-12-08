<?php

namespace App\Http\Controllers\Admin\Advertisement;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\Site;
use Illuminate\Http\Request;
use App\Models\Advertisement;

class AdvertisementController extends Controller
{


    public function __construct(){

    }

    public function index(){
        $data = Advertisement::paginate(3);
        $site_data = Site::all();
        return view('admin.advertisement.ad_manager', compact('data', 'site_data'));
    }

    public function create(){

    }

    public function store(){

    }

    public function show(){

    }

    // edit advertisement
    public function edit(Request $request){

    }

    // update advertisement
    public function update(Request $request){

    }

    public function accept(Request $request){
        $data = Advertisement::find($request->id);
        $data->published_flag = 1;
        $data->save();

        $site_id = Site::all()->random(1)->first()['id'];
        $params = [
            'ad_id'=> $data->id,
            'site_id'=>$site_id,
            'views'=>0,
            'clicks'=>0
        ];
        Report::create($params);
        return redirect(route('admin.advertisement.index'));
    }

    // delete advertisement with id
    public function destroy(Request $request) {
        Advertisement::find($request->id)->delete();
        Report::find($request->id)->delete();
        return redirect(route('admin.advertisement.index'));
    }

    public function search(Request $request){

        if (isset($request->all()['query']) && $request->all()['query'] != ""){
            $query = $request->all()['query'];
            $data = Advertisement::where("title","LIKE", "%".$query."%")->paginate(3);
            $data->appends($request->all());
            return view('admin.advertisement.ad_manager', compact('data','query'));
        }
        elseif (isset($request->all()['company']) && $request->all()['company'] != ""){
            $company = $request->all()['company'];
            $data = Advertisement::whereHas('store', function($q) use ($company){
                $q->where('name','like','%'.$company.'%');
            })->paginate(3);
            $data->appends($request->all());
            return view('admin.advertisement.ad_manager', compact('data','company'));
        }
        else{
            $data = Advertisement::paginate(3);
            return view('admin.advertisement.ad_manager', compact('data'));
        }
    }


}
