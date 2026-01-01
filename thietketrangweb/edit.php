<?php 
include_once "common.php";

$id = $_GET['id'] ?? 0;
if ($_SERVER['REQUEST_METHOD'] =='POST'){
        $tensp = $_POST['tensp'] ?? '';
        $gia = $_POST['gia'] ?? 0;
        $mota = $_POST['mota'] ?? '';

$sql = "UPDATE san_pham
        SET ten_san_pham    = ?,
            gia             = ?,
            mo_ta           = ?
        WHERE id = ?";

        db_execute($sql, [$tensp, $gia, $mota, $id]);
}      
$sql = "SELECT ten_san_pham, gia, mo_ta, ngay_tao 
        FROM san_pham 
        WHERE id = ?";
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
        <title>Sửa sản phẩm</title>
</head>
<body>
        <form method="post">
                <div>
                        <label for="">Tên sản phẩm</label>
                        <input value="<?= $data[0]['ten_san_pham'] ?>"name="tensp" type="text">
                </div>
                <br>
                <div>   
                        <label for="">Giá</label>
                        <input value="<?= $data[0]['gia'] ?>"name="gia" type="number" min="1">
                </div>
                <br>
                <div>
                        <label for="">Mô tả</label>
                        <input value="<?= $data[0]['mo_ta'] ?>"name="mota" type="text">
                </div>
                <br>
                <div>
                        <button type="submit" value="cập nhật sản phẩm">Sửa sản phẩm</button>
                </div>
        </form>
</body>
</html>