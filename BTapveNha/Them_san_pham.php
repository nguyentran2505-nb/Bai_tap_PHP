<!DOCTYPE html>
<html>
<head>
    <title>Thêm sản phẩm</title>
</head>
<body>

<h2>Thêm sản phẩm</h2>
<form method="POST" action="insert.php">
    <label>Tên sản phẩm: </label>
    <input name="tensp" required>
    <br><br>

    <label>Giá: </label>
    <input type="number" name="gia">
    <br><br>

    <label>Mô tả: </label>
    <input name="mota" required>
    <br><br>

    <button type="submit" name="themsp">Thêm sản phẩm</button>
</form>
