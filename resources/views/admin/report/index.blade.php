@extends('common.layout')

@section('content')
    @extends('common.admin_header', ['nav_report'=>'active'])
    <div class="main-panel">
    <div class="content-wrapper">
        @include('common.error')
        @include('common.action-success')
        @include('common.action-fail')
        <div class="row">
            @include('admin.report.list')
        </div>
    </div>
</div>
@endsection
