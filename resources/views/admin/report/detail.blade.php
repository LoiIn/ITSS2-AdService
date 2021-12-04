@extends('common.layout')

@section('content')
    @extends('common.admin_header')
    <div class="main-panel">
    <div class="content-wrapper">

            <div class="col-lg-12 info-area">
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        広告
                        </div>
                        <span class="badge  rounded-pill">{{$report->advertisement->title}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        サイト
                        </div>
                    <span class="badge  rounded-pill">{{$report->site->name}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        ビュー数
                        </div>
                        <span class="badge  rounded-pill">{{$report->views}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        クリック数
                        </div>
                        <span class="badge  rounded-pill">{{$report->clicks}}</span>
                    </li>
                </ol>
            </div>
    </div>
@endsection
