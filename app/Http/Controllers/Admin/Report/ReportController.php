<?php
namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller as BaseController;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends BaseController
{
    private $items_number = 3;

    public function index(){
        $data = Report::orderBy('id', 'desc')->paginate($this->items_number);
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
                    ->orderBy('id', 'desc')->paginate($this->items_number);
                    
            $data->appends($request->all());
            $mess = $data->total() != 0 ? '' : '結果がありません。';
            $request->session()->flash('no-data', $mess);
            $query = $_GET['query'];
            return view('admin.report.index', compact('data', 'query'));
        } else {
            $data = Report::orderBy('id', 'desc')->paginate($this->items_number);
            return view('admin.report.index', compact('data'));
        }
    }

}
