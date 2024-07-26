<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách</h1>
    <a href="{{ route('admin.products.addProducts') }}">Thêm mới</a>
    <a href="{{ route('logout') }}">Logout</a>
    
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Category Name</th>
                <th>Price</th>
                <th>View</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->cate_name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->view }}</td>
                    <td>
                        <a href="{{ route('admin.products.destroy', $item->id) }} " onclick="return confirm('Bạn muỗn xoá?')">Xoá</a>
                        <a href="{{ route('admin.products.update', $item->id) }}">Sửa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>