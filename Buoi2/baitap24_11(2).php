<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>bai lam PHP</title>
    </head>
<body>
    <h2>bài tập số nguyên tố</h2>
<?php

if (isset($_GET['n'])) { //cách nhận biết người dùng không nhập đúng số trên thanh tìm kiếm.
    $n = $_GET['n'];
    
    if(!is_numeric($n)){
        echo "giá trị không phải là số!";
    }else{
        echo "giá trị hợp lệ";
    }
    echo "<br>";
}else {
    echo "chưa nhập giá trị s trên URL!";
    }
    $n = $_GET['n'];
    for($i=2;$i<=n;$i++){
        if($n%$i==0){
            return $n;
            }
        }

?>

    </body>
</html>