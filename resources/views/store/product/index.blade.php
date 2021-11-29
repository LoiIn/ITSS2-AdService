@extends('common.layout')

@section('content')
    @extends('common.header')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                @include('store.product.list')
            </div>
        </div>
    </div>
@endsection