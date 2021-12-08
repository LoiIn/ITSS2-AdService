<?php
namespace App\Http\Controllers\Admin\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{


    public function __construct(){

    }

    public function index(){
        $data = Store::paginate(2);
        return view('admin/store.store_manager', compact('data'));
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
        $data = Store::find($request->id);
        $data->delete();
        return redirect(route('store.index'));
    }

    public function accept(Request $request) {
        $data = Store::find($request->id);
        $data->is_accepted = 1;
        $data->save();
        return redirect(route('store.index'));
    }

    public function search(Request $request) {
        if (isset($_GET['query']) && $_GET['query'] != ""){
            $data = Store::where("name","LIKE", "%".$_GET['query']."%")->paginate(1);
            $data->appends($request->all());
            return view('admin/store.store_manager', compact('data'));
        }
        else{
            $data = Store::paginate(2);
            return view('admin/store.store_manager', compact('data'));
        }
    }


}
