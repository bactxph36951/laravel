<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Sửa Product</h1>
    <form action="{{ route('admin.products.updatePostProduct', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="idPro" id="" value="{{ $product -> id }}">
        Name: <input type="text" name="name" value="{{ $product -> name }}">
        
        Price: <input type="text" name="price" value="{{ $product -> price }}">
        View: <input type="text" name="view" value="{{ $product -> view }}">

        <button type="submit">Sửa</button>
    </form>
</body>
</html>