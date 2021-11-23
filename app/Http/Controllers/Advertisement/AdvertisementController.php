<?php

namespace App\Http\Controllers\Advertisement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertisement;

class AdvertisementController extends Controller
{


    public function __construct(){

    }

    public function index(){
        $data = Advertisement::paginate(2);
        return view('advertisement.ad_manager', compact('data'));
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
    
    // delete advertisement with id
    public function destroy(Request $request) {
   
        Advertisement::find($request->id)->delete();
        return redirect(route('advertisement.index'));
    }

    public function search(Request $request){
        
    }

   
}
