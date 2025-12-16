<?php 

//Thông tin kết nối CSDL
$host = "localhost"; //127.0.0.1
$database = "study_php";
$username = "root";
$pwd = "";

//Dữ liệu mẫu
$tensp = "laptop ASUS";
$gia = 18000000;
$mota = "Mô tả của laptop ASUS";

//Mở kết nối
$connection = new mysqli($host, $username, $pwd, $database);

$sql = "INSERT INTO san_pham(ten_san_pham, gia, mo_ta)
        VALUES ('$tensp', '$gia', '$mota')";
$connection->execute_query($sql);
$connection->close();

echo "thêm mới thành công";