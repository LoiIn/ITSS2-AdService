@extends('common.layout')

@section('content')
    @extends('common.header', ['nav_store' => 'active'])
    <div class="main-panel">
        <div class="content-wrapper">
            @include('common.error')
            @include('common.action-fail')
            <div class="row">
                <div class="col-md-8 offset-md-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">企業登録</h4>
                    <form class="forms-sample" method="POST" action="{{ route('store.signup') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">企業名</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="name" 
                                       placeholder="企業名を入力して下さい。"
                                       value="{{ old('name') }}"
                                >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">メール</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email" id="email" 
                                       placeholder="メールを入力して下さい。"
                                       value="{{ old('email') }}"
                                >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">アドレス</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="address" id="address" 
                                       placeholder="アドレスを入力して下さい。"
                                       value="{{ old('address') }}"
                                >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">電話番号</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="phone" id="phone" 
                                       placeholder="電話番号を入力して下さい。"
                                       value="{{ old('phone') }}"
                                >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">パスワード</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" id="password" placeholder="パスワードを入力して下さい。">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">パスワードの変更</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password_confirmation" id="password" placeholder="パスワードをもう一度入力して下さい。">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">ロゴ</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control mb-2" name="logo" id="image" placeholder="" aria-describedby="fileHelpId">
                                <span id="preview-image-before-upload">
                                    <img 
                                        src="{{ asset('asset/images/not-found.png') }}" 
                                        alt="">
                                </span>
                            </div>
                        </div>
                        <div class="form-group row text-center">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary form-action-btn mr-2">登録</button>
                            </div>
                            <div class="col-sm-12 text-center mt-3">
                                <a name="" id="" class="" href="{{route('store.login')}}" role="button">
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
 
 
