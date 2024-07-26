<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    @if (session("message"))
        <h3 style="color: red">{{session("message") }}</h3>
    @endif
    <form action="{{ route("postRegister") }}" method="post">
        @csrf
        Name:
        <input type="text" name="name">
        Email:
        <input type="email" name="email">
        Password:
        <input type="text" name="password">
        Confirm Password:
        <input type="text" name="confirmpassword">
        

        <button>Đăng ký</button>
    </form>
</body>
</html>