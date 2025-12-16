<?php
include 'header.php'
?>

<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    echo'Họ tên: ' . $ten =$_GET['ten'];
    echo'<br><br>Mã số sinh viên: ' . $number =$_GET['mssv'];
    echo'<br><br>Email: ' . $email =$_GET['email'];
    echo'<br><br>Số điện thoại: ' . $number =$_GET['sdt'];
}else{
    echo'không có';
}
?>

<?php
include 'footer.php'
?>