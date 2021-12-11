@extends('common.layout')

@section('content')
    @extends('common.admin_header', ['nav_store'=>'active'])
    <div class="main-panel">
    <div class="content-wrapper">
        @include('common.error')
        @include('common.action-success')
        @include('common.action-fail')
        <div class="row">
            @include('admin.store.list')
        </div>
    </div>
</div>
@endsection
