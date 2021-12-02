@extends('common.layout')

@section('content')
    @extends('common.header', ['nav_advertisement' => 'active'])
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                @include('store.advertisement.list')
            </div>
        </div>
    </div>
@endsection