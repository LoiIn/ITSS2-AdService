@extends('common.layout')

@section('content')
    @extends('common.header', ['nav_auth' => 'active']) 
    <div class="main-panel">
        <div class="content-wrapper">
            @include('common.error')
            @include('common.action-fail')
            <div class="row">
                <div class="col-md-8 offset-md-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">企業ログイン</h4>
                        <form class="forms-sample" method="POST" action="{{ route('store.login') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">メール</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="メールを入力してください。">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">パスワード</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="パスワードを入力してください。">
                                </div>
                            </div>
                            <div class="form-group row text-center">
                               <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary form-action-btn mr-2">登録</button>
                                    <button class="btn btn-light form-action-btn">サインアップ</button>
                               </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection