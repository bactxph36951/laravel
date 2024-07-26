<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>User</title>
</head>
<body>
    <form action="{{ route('users.update') }}" method="post" class="form-control">
        @csrf
        <input type="hidden" name="idUser" id="" value="{{ $user -> id }}">
        <label for="" class="form-label">Tên</label>
        <input type="text" name="name" class="form-control" value="{{ $user -> name }}">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" value="{{ $user -> email }}">
        <label for="">Phòng Ban</label><br>
        <select name="phongban" id="" class="form-select">
            @foreach ($phongBan as $value)
            <option value="{{ $value->id}}">{{ $value->ten_donvi }}</option>
            @endforeach
        </select><br>
        <label for="">Tuổi</label>
        <input type="number" name="tuoi" class="form-control" value="{{ $user -> tuoi }}">
        <label for="">Ngày nghỉ</label>
        <input type="number" name="ngaynghi" class="form-control" value="{{ $user -> songaynghi }}">
        
        <button type="submit" class="btn btn-success mt-3">Sửa</button>
    </form> 
</body>
</html> 