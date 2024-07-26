<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thêm Product</h1>
    <form action="{{ route('admin.products.addPostProduct') }}" method="POST">
        @csrf
        Name: <input type="text" name="name">
        
        Price: <input type="text" name="price">
        View: <input type="text" name="view">

        <button type="submit">Thêm</button>
    </form>
</body>
</html>