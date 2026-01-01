<?php 
include_once "common.php";

$sql = "SELECT ten_san_pham, gia, mo_ta, ngay_tao 
        FROM san_pham 
        WHERE id = ?";
    $id = $_GET['id'] ?? 0;
    $data = db_select($sql,[$id]);
    if (count ($data)==0){
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiet san pham</title>
</head>
<body> 

<p>Tên sản phẩm: <?= $data[0]['ten_san_pham'] ?></p>
<p>Giá: <?= $data[0]['gia'] ?></p>
<p>Mô tả: <?= $data[0]['mo_ta'] ?></p>
<p>Ngày tạo: <?= $data[0]['ngay_tao'] ?></p>
<body>
</html>