<!DOCTYPE html>
<html>
<head>
    <title>Store Signup</title>
</head>
<body>
<form method="POST" action="{{ route('signup') }}">
    @csrf
    <h1>Store</h1>
    <input type="email" name="email" placeholder="Nhập địa chỉ email">
    <input type="name" name="name" placeholder="Nhập ten cty">
    <input type="password" name="password" placeholder="Nhập mật khẩu">
    <input type="address" name="address" placeholder="Nhập mật dia chi">
    <input type="phone" name="phone" placeholder="Nhập sdt">
    <button type="submit">Đăng Ký</button>
</form>
</body>
</html>
