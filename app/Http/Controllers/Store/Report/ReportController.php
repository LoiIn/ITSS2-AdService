<?php

namespace App\Http\Controllers\Store\Report;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends BaseController
{
    public function index(){
       $data = Auth::guard('store')->user()->adReports()->paginate(3);
       return view('store.report.index', compact('data'));
    }

    public function show($id){
        $report = Report::find($id);
        return view('store.report.detail', compact('report'));
    }
}
