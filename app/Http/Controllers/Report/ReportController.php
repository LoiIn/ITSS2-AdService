<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends BaseController
{
    public function index(){
       $data = Auth::guard('store')->user()->adReports()->get();
       return view('report.index', compact('data'));
    }

    public function show($id){
        $report = Report::find($id);
        return view('report.detail', compact('report'));
    }
}