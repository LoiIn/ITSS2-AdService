@extends('common.layout')

@section('content')
    @extends('common.header', ['nav_auth' => 'active']) 
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-8 offset-md-2 grid-margin stretch-card">
                <div class="card">
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if($errors)
                    @foreach ($errors->all() as $error)

                        <div class="alert alert-danger">
                            @if ($errors->has('new-password'))
                                @if (strpos($errors->first('new-password'), 'confirmation does not match')!== false)
                                    新しいパスワードと確認パスワードが同じではありません
                                @else
                                    新しいパスワードは6文字以上である必要があります。
                                @endif
                            @elseif ($errors->has('current-password'))
                                {{ $errors->first('current-password') }}
                            @endif

                        </div>

                    @endforeach
                @endif
                    <div class="card-body">
                    <h4 class="card-title">パスワードを変更する</h4>
                    <form class="forms-sample" method="POST" action="{{ route('store.profile.changePassword') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">現在のパスワード</label>
                            <div class="col-sm-9">
                                <input id="current-password" type="password" class="form-control" name="current-password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">新しいパスワード</label>
                            <div class="col-sm-9">
                                <input id="new-password" type="password" class="form-control" name="new-password" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">新しいパスワードを確認</label>
                            <div class="col-sm-9">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary form-action-btn mr-2">変更</button>
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


