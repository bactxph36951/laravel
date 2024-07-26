<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    @if (session("message"))
        <h3 style="color: red">{{session("message") }}</h3>
    @endif
    <form action="{{ route("postLogin") }}" method="post">
        @csrf
        Email:
        <input type="text" name="email">
        Password:
        <input type="text" name="password">
        

        <button>Đăng nhập</button>
    </form>
    <a href="{{ route("register") }}">Đăng ký?</a>
</body>
</html>