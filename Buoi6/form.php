<?php 
include 'header.php';
?>

<form method="GET" action="ketqua.php">
    <label>Tên sinh viên:</label>
    <input name="ten" required>
    <br><br>

    <label>Mã số sinh viên:</label>
    <input type="number" name="mssv" required>
    <br><br>

    <label>Email:</label>
    <input type="email" name="email" required>
    <br><br>

    <label>Số điện thoại:</label>
    <input type="number" name="sdt" required>
    <br><br>

    <button type="submit" name="sv">Hiển Thị</button>
</form>

<?php
include 'footer.php';
?>