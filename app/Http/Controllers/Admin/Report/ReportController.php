<?php
namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends BaseController
{
    public function __construct(){

    }

    public function index(){
        $data = Report::paginate(3);
        return view('admin.report.index', compact('data'));
    }

    public function show($id){
        $report = Report::find($id);
        return view('admin.report.detail', compact('report'));
    }
}
