<?php
namespace App\Http\Controllers\Admin\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    public function index(){
        $data = Store::paginate(3);
        return view('admin/store.store_manager', compact('data'));
    }

    // delete advertisement with id
    public function destroy(Request $request) {
        $data = Store::find($request->id);
        $data->delete();
        $request->session()->flash('action-success', '企業を正常に削除しました。');
        return redirect(route('store.index'));
    }

    public function accept(Request $request) {
        $data = Store::find($request->id);
        $data->is_accepted = 1;
        $data->save();
        Mail::send(['text'=>'admin.store.mail'], array('name'=>$data->name,'email'=>$data->email), function($message) use($data){
            $message->to($data['email'])->subject('新企業がアクセプトされました!');
            $message->from(env('MAIL_USERNAME'),'ITSS2-Random-AdService');
        });
        $request->session()->flash('action-success', '新企業のアクセプトに成功。');
        return redirect(route('store.index'));
    }

    public function search(Request $request) {
        if (isset($_GET['query']) && $_GET['query'] != ""){
            $data = Store::where("name","LIKE", "%".$_GET['query']."%")->paginate(3);
            $data->appends($request->all());
            $mess = $data->total() != 0 ? '' : '結果がありません。';
            $request->session()->flash('no-data', $mess);
            return view('admin/store.store_manager', compact('data'));
        }
        else{
            $data = Store::paginate(3);
            return view('admin/store.store_manager', compact('data'));
        }
    }


}
