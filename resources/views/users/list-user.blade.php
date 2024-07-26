<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>User</title>
</head>

<body>
    <a href="{{ route('users.addUsers') }}">Thêm mới</a>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Phòng ban</th>
                <th colspan="2">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listUsers as $key => $value)
                <tr>
                    <td>{{ $key + 1}}</td>
                    <td>{{ $value->name}}</td>
                    <td>{{ $value->email}}</td>
                    <td>{{ $value->ten_donvi}}</td>
                    <td><a href="{{ route('users.updateUsers', $value->id) }}">Edit</a></td>
                    <td>
                        <form action="{{ route('users.deleteUsers', $value->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Del">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>