<?php

namespace App\Http\Controllers\Admin\Advertisement;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\Site;
use Illuminate\Http\Request;
use App\Models\Advertisement;

class AdvertisementController extends Controller
{
    public function index(){
        $data = Advertisement::orderBy('id', 'desc')->paginate(3);
        $site_data = Site::all();
        return view('admin.advertisement.ad_manager', compact('data', 'site_data'));
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
        $request->session()->flash('action-success', '新広告のアクセプトに成功。');
        return redirect(route('admin.advertisement.index'));
    }

    // delete advertisement with id
    public function destroy(Request $request, $id) {
        Advertisement::find($id)->delete();
        Report::find($id)->delete();
        $request->session()->flash('action-success', '広告を正常に削除しました。');
        return redirect(route('admin.advertisement.index'));
    }

    public function search(Request $request){
        if (isset($_GET['query']) && $_GET['query'] != "") {
            $data = Advertisement::join('stores', 'stores.id', '=', 'advertisements.store_id')
                    ->where('advertisements.title', 'LIKE', '%'.$_GET['query'].'%')
                    ->orWhere('stores.name', 'LIKE', '%'.$_GET['query'].'%')
                    ->paginate(3);
                    
            $data->appends($request->except());
            $mess = $data->total() != 0 ? '' : '結果がありません。';
            $request->session()->flash('no-data', $mess);
            return view('admin.advertisement.ad_manager', compact('data'));
        } else {
            $data = Advertisement::paginate(3);
            return view('admin.advertisement.ad_manager', compact('data'));
        }
    }
}
