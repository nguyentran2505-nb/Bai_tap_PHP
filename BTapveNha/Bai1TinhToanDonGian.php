<!DOCTYPE html>
<html>
<head>
    <title>Tính Toán Đơn Giản</title>
</head>
<body>

<h2>Máy Tính Đơn Giản</h2>

<form method="POST">
    <label>Số thứ nhất:</label>
    <input type="number" name="số1" required>
    <br><br>

    <label>Số thứ hai:</label>
    <input type="number" name="số2" required>
    <br><br>

    <label>Phép toán:</label>
    <select name="pheptoan">
        <option value="cong">Cộng</option>
        <option value="tru">Trừ</option>
        <option value="nhan">Nhân</option>
        <option value="chia">Chia</option>
    </select>
    <br><br>

    <button type="submit" name="tinh">Tính toán</button>
</form>

<hr>

<?php
if (isset($_POST['tinh'])) {

    $a = $_POST['số1'];
    $b = $_POST['số2'];
    $pt = $_POST['pheptoan'];
    $ketqua = "";

    switch ($pt) {
        case "cong":
            $ketqua = $a + $b;
            echo "Kết quả: $a + $b = $ketqua";
            break;

        case "tru":
            $ketqua = $a - $b;
            echo "Kết quả: $a - $b = $ketqua";
            break;

        case "nhan":
            $ketqua = $a * $b;
            echo "Kết quả: $a × $b = $ketqua";
            break;

        case "chia":
            if ($b == 0) {
                echo "Lỗi: Không thể chia cho 0!";
            } else {
                $ketqua = $a / $b;
                echo "Kết quả: $a ÷ $b = $ketqua";
            }
            break;
    }
}
?>

</body>
</html>