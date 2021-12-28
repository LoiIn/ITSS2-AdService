@extends('common.layout')

@section('content')
    @extends('common.header')
    <div class="main-panel">
        <div class="row">
            <div class="col-md-10 offset-2">
                <div class="panel panel-default">

                    <h2 style="padding-top: 20px;">パスワードを変更する</h2>

                    <div class="panel-body">
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
                        <form class="form-horizontal" method="POST" action="{{ route('store.profile.changePassword') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-4 control-label" style="padding-top: 10px">現在のパスワード</label>

                                <div class="col-md-6">
                                    <input id="current-password" type="password" class="form-control" name="current-password" required>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-4 control-label">新しいパスワード</label>

                                <div class="col-md-6">
                                    <input id="new-password" type="password" class="form-control" name="new-password" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="new-password-confirm" class="col-md-4 control-label">新しいパスワードを確認</label>

                                <div class="col-md-6">
                                    <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        パスワードを変更する
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


