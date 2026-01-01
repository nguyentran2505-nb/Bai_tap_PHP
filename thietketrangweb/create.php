<?php 
include_once "common.php";

if ($_SERVER['REQUEST_METHOD'] =='POST'){
        $tensp = $_POST['tensp'] ?? '';
        $gia = $_POST['gia'] ?? 0;
        $mota = $_POST['mota'] ?? '';

$sql = "INSERT INTO san_pham(ten_san_pham, gia, mo_ta)
        VALUES ('$tensp', '$gia', '$mota')";

        db_execute($sql);

        //chuyển hướng về trang index
        header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thêm sản phẩm</title>
</head>
<body>
        <form method="post">
                <div>
                        <label for="">Tên sản phẩm</label>
                        <input name="tensp" type="text">
                </div>
                <br>
                <div>   
                        <label for="">Giá</label>
                        <input name="gia" type="number" min="1">
                </div>
                <br>
                <div>
                        <label for="">Mô tả</label>
                        <input name="mota" type="text">
                </div>
                <br>
                <div>
                        <button type="submit">Thêm</button>
                </div>
        </form>
</body>
</html>