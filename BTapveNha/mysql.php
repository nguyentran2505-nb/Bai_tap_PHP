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
echo "</pre>";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Danh Sách Sản Phẩm</title>
    </head>
    <body>
        
        <h2>Hiển Thị Danh Sách Sản Phẩm</h2>
        
    <table border="5" cellpadding="5" >
        <tr>
            <th>Tên Sản Phẩm:</th>
            <th>Giá</th>
            <th>Mô Tả</th>
        </tr>

        <?php 
        foreach($data as $sanpham){
            echo "<tr>";
            echo "<td>{$sanpham['ten_san_pham']}</td>";
            echo "<td>{$sanpham['gia']}</td>";
            echo "<td>{$sanpham['mo_ta']}</td>";
            echo "</tr>";
        }
        ?>
</table>
</body>
</html>