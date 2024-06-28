<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h1>Xin chào các đồng viêw</h1>
    <table>
        <thead>
            <tr>
                <th>Họ tên</th>
                <th>Quê quán</th>
                <th>Năm sinh</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($listSV as $value):
                ?>
                <tr>
                
                    <td><?= $value['hoTen'] ?></td>
                    <td>{{$value['queQuan']}}</td>
                    <td>{{$value['namSinh']}}</td>
                </tr>
            
                <?php endforeach; ?>
            
            
        </tbody>
    </table>
</body>
</html>