<?php 

//Thông tin kết nối CSDL
$host = "localhost"; //127.0.0.1
$database = "study_php";
$username = "root";
$pwd = "";

//Mở kết nối
$connection = new mysqli($host, $username, $pwd, $database);

$sql = "SELECT * From san_pham";
$data = $connection->execute_query($sql)->fetch_all(MYSQLI_ASSOC);

//Đóng kết nối
$connection->close();

echo "<pre>";
var_dump($data);
echo "</pre>";

