<?php
namespace App\Http\Controllers\Admin\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Report;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    private $items_number = 3;

    public function index(){
        $data = Store::orderBy('id', 'desc')->paginate($this->items_number);
        return view('admin/store.store_manager', compact('data'));
    }

    // delete store with id
    public function destroy(Request $request) {
        $data = Store::find($request->id);
        $adIds = $data->advertisements()->pluck('id');
        
        // delete product
        $data->products()->delete();

        // delete advertisement
        $data->advertisements()->delete();

        // delete report
        $colection = Report::whereIn('ad_id', $adIds)->pluck('id');
        Report::destroy($colection->toArray());

        // delete store
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
            $data = Store::where("name","LIKE", "%".$_GET['query']."%")->orderBy('id', 'desc')->paginate($this->items_number);
            $data->appends($request->all());
            $mess = $data->total() != 0 ? '' : '結果がありません。';
            $request->session()->flash('no-data', $mess);
            $query = $_GET['query'];
            return view('admin/store.store_manager', compact('data', 'query'));
        }
        else{
            $data = Store::orderBy('id', 'desc')->paginate($this->items_number);
            return view('admin/store.store_manager', compact('data'));
        }
    }


}
