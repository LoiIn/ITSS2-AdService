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
                            <h4 class="card-title">企業の使いフロー</h4>
                            {{-- guide 1 --}}
                            <div class="row mt-4">
                                <div class="col-md-5 guide-left guide-image">
                                    <img src="{{ asset('asset/images/about/signup.png')}}" alt="">
                                </div>
                                <div class="col-md-6 offset-md-1 guide-right guide-text grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">企業登録</h4>
                                            <p>
                                                サビースが使えるように、企業の情報を記入して、
                                                企業のアカウトを登録する必要があります。登録したあと、
                                                まだログインできません。管理者がアカウントを承認する必要があります。
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
                                            <h4 class="card-title">ログイン</h4>
                                            <p>
                                                企業のアカウントが承認されたあと、ログインできます。
                                                そして、サービスを利用することできます。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1 guide-right guide-image">
                                    <img src="{{ asset('asset/images/about/login.png')}}" alt="">
                                </div>
                            </div>{{--end guide 2--}}

                            {{-- guide 3 --}}
                            <div class="row mt-4">
                                <div class="col-md-5 guide-left guide-image">
                                    <img src="{{ asset('asset/images/about/product.png')}}" alt="">
                                </div>
                                <div class="col-md-6 offset-md-1 guide-right guide-text grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">商品登録</h4>
                                            <p>
                                                広告商品を登録する必要があります、そして、商品管理することもできます。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>{{--end guide 3--}}

                            {{-- guide 4 --}}
                            <div class="row mt-4">
                                <div class="col-md-6 guide-left guide-text grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">広告登録</h4>
                                            <p>
                                                メイン機能です。広告を登録して、まだ広告できません。
                                                管理者が承認する必要です。広告管理することできます。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1 guide-right guide-image">
                                    <img src="{{ asset('asset/images/about/ad.png')}}" alt="">
                                </div>
                            </div>{{--end guide 4--}}

                            {{-- guide 5 --}}
                            <div class="row mt-4">
                                <div class="col-md-5 guide-left guide-image">
                                    <img src="{{ asset('asset/images/about/meet.png')}}" alt="">
                                </div>
                                <div class="col-md-6 offset-md-1 guide-right guide-text grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">組み合わせ</h4>
                                            <p>
                                                わたくしがお客様と広告バナーについて、どのようにデザインか相談して決めます。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>{{--end guide 5--}}

                            {{-- guide 6 --}}
                            <div class="row mt-4">
                                <div class="col-md-6 guide-left guide-text grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">エンドユーザーに広告</h4>
                                            <p>
                                                広告バナーがデザインできたあと、インタネットのウェブサイトにつける。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 offset-md-1 guide-right guide-image">
                                    <img src="{{ asset('asset/images/about/enduser.png')}}" alt="">
                                </div>
                            </div>{{--end guide 6--}}

                            {{-- guide 7 --}}
                            <div class="row mt-4">
                                <div class="col-md-5 guide-left guide-image">
                                    <img src="{{ asset('asset/images/about/report.png')}}" alt="">
                                </div>
                                <div class="col-md-6 offset-md-1 guide-right guide-text grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">レポート</h4>
                                            <p>
                                                店舗の広告の見た人の数やクリック数がチャートで見えます。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>{{--end guide 7--}}
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
@endsection