<!DOCTYPE html>
<html>
<head>
    <title>Store Login</title>
</head>
<body>
<form method="POST" action="{{ route('store.login') }}">
    @csrf
    <h1>Store</h1>
    <input type="email" name="email" placeholder="Nhập địa chỉ email" id="email" class="form-control">
    <input type="password" name="password" placeholder="Nhập mật khẩu">
    <button type="submit">Đăng nhập</button>
</form>
</body>
</html>
