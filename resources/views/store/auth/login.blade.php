@extends('common.layout')

@section('content')
    @extends('common.header', ['nav_auth' => 'active']) 
    <div class="main-panel">
        <div class="content-wrapper">
            @include('common.error')
            @include('common.action-fail')
            @include('common.action-success')
            <div class="row">
                <div class="col-md-8 offset-md-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">企業ログイン</h4>
                        <form class="forms-sample" method="POST" action="{{ route('store.login') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">メール</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="メールを入力してください。">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">パスワード</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="パスワードを入力してください。">
                                </div>
                            </div>
                            <div class="form-group row text-center">
                               <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary form-action-btn">ログイン</button>
                               </div>
                               <div class="col-sm-12 text-center mt-3">
                                    <a name="" id="" class="" href="{{route('store.register')}}" role="button">
                                        アカウントがあると、ここをクリックしてください
                                    </a>
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