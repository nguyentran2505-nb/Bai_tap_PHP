<?php
include_once "common.php";

$sql = "SELECT id, ten_san_pham, gia, mo_ta, anh, ngay_tao FROM san_pham";
$data = db_select($sql);

// echo "<pre>";
// print_r($data[0]);
// echo "</pre>";
// die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th, td{
            padding: 5px
        }
    </style>
</head>
<body>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Mô tả</th>
            <th>Ngày tạo</th>
            <th></th>
        </tr>
        
        <?php foreach ($data as $key => $sp): ?>
            <tr>
                <td><?= $sp['id'] ?></td>
                <td><?= $sp['anh'] ?></td>
                <td><?= $sp['ten_san_pham'] ?></td>
                <td><?= number_format($sp['gia']) ?></td>
                <td><?= $sp['mo_ta'] ?></td>
                <td><?= $sp['ngay_tao']?></td>
                <td>
                    <a onclick="confirm('Xác nhận xóa hả!!! Chắc chưa???')"
                        href ="delete.php?id=<?= $sp['id'] ?>">XÓA</a>
                </td>
            </tr>
            
            <?php endforeach?>
        </table>
        <a href="create.php">Thêm sản phẩm</a>
        
    </body>
    </html>