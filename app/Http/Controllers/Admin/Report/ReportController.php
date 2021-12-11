<?php
namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller as BaseController;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends BaseController
{
    public function index(){
        $data = Report::paginate(3);
        return view('admin.report.index', compact('data'));
    }

    public function show($id){
        $report = Report::find($id);
        return view('admin.report.detail', compact('report'));
    }

    public function search(Request $request)
    {
        if (isset($_GET['query']) && $_GET['query'] != "") {
            $data = Report::join('advertisements', 'advertisements.id', '=', 'reports.ad_id')
                    ->join('stores', 'stores.id', '=', 'advertisements.store_id')
                    ->where('advertisements.title', 'LIKE', '%'.$_GET['query'].'%')
                    ->orWhere('stores.name', 'LIKE', '%'.$_GET['query'].'%')
                    ->paginate(3);
                    
            $data->appends($request->all());
            $mess = $data->total() != 0 ? '' : '結果がありません。';
            $request->session()->flash('no-data', $mess);
            return view('admin.report.index', compact('data'));
        } else {
            $data = Report::paginate(3);
            return view('admin.report.index', compact('data'));
        }
    }

}
