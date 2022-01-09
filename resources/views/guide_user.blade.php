@extends('common.layout')

@section('content')
    @extends('common.header', ['nav_guide' => 'active'])
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row mt-2">
                <div class="col-md-10 offset-md-1 grid-margin stretch-card">
                    {{-- parent card --}}
                    <div class="card" style="background-color: rgb(250 222 216) !important">
                        <div class="card-body">
                            <h4 class="card-title">エンドユーザー側のフロー</h4>
                            {{-- guide 1 --}}
                            <div class="row mt-4">
                                <div class="col-md-5 guide-left guide-image">
                                    <img src="{{ asset('asset/images/about/ad.png')}}" alt="">
                                </div>
                                <div class="col-md-6 offset-md-1 guide-right guide-text grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">ステップ1</h4>
                                            <p>
                                                エンドユーザーがウェブサイトを⾒るとき、広告バナーも⾒える 。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>{{--end guide 1--}}

                            {{-- guide 2 --}}
                            <div class="row mt-4">
                                <div class="col-md-6 guide-left guide-text grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">ステップ2</h4>
                                            <p>
                                                広告バンナーをクリックして商品サイトが開く
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1 guide-right guide-image">
                                    <img src="{{ asset('asset/images/about/banner.png')}}" alt="">
                                </div>
                            </div>{{--end guide 2--}}
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
@endsection