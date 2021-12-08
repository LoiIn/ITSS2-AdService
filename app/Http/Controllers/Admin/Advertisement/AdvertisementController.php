<?php

namespace App\Http\Controllers\Admin\Advertisement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertisement;

class AdvertisementController extends Controller
{


    public function __construct(){

    }

    public function index(){
        $data = Advertisement::paginate(3);
        return view('admin.advertisement.ad_manager', compact('data'));
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
        return redirect(route('admin.advertisement.index'));
    }

    // delete advertisement with id
    public function destroy(Request $request) {
        Advertisement::find($request->id)->delete();
        return redirect(route('admin.advertisement.index'));
    }

    public function search(Request $request){

        if (isset($request->all()['query']) && $request->all()['query'] != ""){
            $query = $request->all()['query'];
            $data = Advertisement::where("title","LIKE", "%".$query."%")->paginate(3);
            $data->appends($request->all());
            return view('admin.advertisement.ad_manager', compact('data','query'));
        }
        else{
            $data = Advertisement::paginate(3);
            return view('admin.advertisement.ad_manager', compact('data'));
        }
    }


}
