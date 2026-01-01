<?php
$host = "localhost"; //127.0.0.1
$database = "study_php";
$username = "root";
$pwd = "";
$id = $_GET['id']??'';

if($id == ''){
    echo 'không có id này bẹn ơi!!!';
}

$connection = new mysqli($host, $username, $pwd, $database);

$sql="DELETE FROM san_pham where id=$id";

if($connection->execute_query($sql)){
    echo "Xóa sản phẩm thành công";
}else{
    echo "xóa không được nha";
}
?>