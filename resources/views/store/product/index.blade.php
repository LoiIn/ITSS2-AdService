@extends('common.layout')

@section('content')
    @extends('common.header', ['nav_product' => 'active'])
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                @include('store.product.list')
            </div>
        </div>
    </div>
@endsection