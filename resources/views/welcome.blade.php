@extends('common.layout')

@section('content')
    @extends('common.header', ['nav_home' => 'active'])
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row mt-4">
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                          <a href="{{route('product.index')}}">
                            <h4 class="card-title text-primary">商品管理</h4>
                          </a>
                          <p class="card-description">
                          </p>
                          <p>
                            <u>lorem ipsum dolor sit amet, consectetur
                              mod tempor incididunt ut labore et dolore
                              magna aliqua.</u>
                          </p>
                        </div>
                        <div class="card-body">
                            <a href="{{route('advertisement.index')}}">
                              <h4 class="card-title text-danger">広告のサービス</h4>
                            </a>
                            <p>
                              <u>lorem ipsum dolor sit amet, consectetur
                                mod tempor incididunt ut labore et dolore
                                magna aliqua.</u>
                            </p>
                          </div>
                          <div class="card-body">
                            <a href="{{route('report.index')}}">
                              <h4 class="card-title text-warning">レポートを参考する</h4>
                            </a>
                            <p>
                              <u>lorem ipsum dolor sit amet, consectetur
                                mod tempor incididunt ut labore et dolore
                                magna aliqua.</u>
                            </p>
                          </div>
                        
                      </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body mb-3">
                                  <h4 class="card-title">
                                    <i class="mdi mdi-account-check"></i>
                                      商店に
                                    </h4>
                                  <div class="template-demo">
                                    <a name="" id="" class="btn btn-info btn-lg btn-block" href="{{route('store.login')}}" role="button">
                                      ログイン
                                    </a>
                                    <a name="" id="" class="btn btn-primary btn-lg btn-block" href="{{route('store.signup')}}" role="button">
                                      サインアップ
                                    </a>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <div class="card">
                                <div class="card-body mb-3">
                                  <h4 class="card-title">
                                    <i class="mdi mdi-account-card-details"></i>  
                                      管理に
                                  </h4>
                                  <div class="template-demo">
                                    <a name="" id="" class="btn btn-outline-warning btn-lg btn-block" href="{{route('store.index')}}" role="button">
                                      管理画面
                                    </a>
                                  </div>
                                  <div class="template-demo">
                                    <a name="" id="" class="btn btn-light btn-lg btn-block" href="{{route('admin.login')}}" role="button">
                                      ログイン
                                    </a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                  </div>
            </div>
        </div>
    </div>
@endsection