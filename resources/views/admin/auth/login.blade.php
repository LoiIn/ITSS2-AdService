<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel='stylesheet' href="{{asset('css/admin/login.css')}}">
</head>
<body>
<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <h1>Admin</h1>
    <div>
        <span>メール</span>
        <input type="text" name="email" placeholder="Nhập địa chỉ email">
    </div>
    <div>
    <span>パスワード</span>
    <input type="password" name="password" placeholder="Nhập mật khẩu">
    </div>
    <div>
        <p>パスワードを忘れた？</p>
    </div>
    <button type="submit">ログイン</button>
</form>
</body>
</html>
