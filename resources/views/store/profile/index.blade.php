@extends('common.layout')

@section('content')
    @extends('common.header')
    <div class="main-panel">
        <div class="content-wrapper">
            @include('common.error')
            @include('common.action-success')
            @include('common.action-fail')
            <div class="row">
                @include('store.profile.list')
            </div>
        </div>
    </div>
@endsection