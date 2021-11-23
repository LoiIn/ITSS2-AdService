<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="{{asset('css')}}" rel="stylesheet">
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Random</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('signup')}}">企業登録<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">商品管理</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">広告登録</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">レボート</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('store.login')}}">ログイン</a>
            </li>
        </ul>
    </div>
</nav>
<div id="register">
    <h3 class="text-center text-white pt-5">Register form</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{route('signup')}}" method="POST">
                        @csrf
{{--                        <h3 class="text-center text-info">Register</h3>--}}
                        <div class="form-group">
                            <label class="text-info">メール:</label><br>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-info">企業名:</label><br>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-info">パスワード:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-info">アドレス:</label><br>
                            <input type="text" name="address" id="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="text-info">電話番号:</label><br>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="登録">
                        </div>
{{--                        <div id="register-link" class="text-right">--}}
{{--                            <a href="{{route('store.login')}}" class="text-info">Login here</a>--}}
{{--                        </div>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
