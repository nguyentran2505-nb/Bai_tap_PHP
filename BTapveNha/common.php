<?php

function get_db_connection(){
    $host = "localhost"; //127.0.0.1
    $database = "study_php";
    $username = "root";
    $pwd = "";

    //Mở kết nối
    $connection = new mysqli($host, $username, $pwd, $database);
    return $connection;
}
//chỉ dùng cho câu select
function db_select($sql){
$host = "localhost"; //127.0.0.1
$database = "study_php";
$username = "root";
$pwd = "";

$connection = get_db_connection();
$data = $connection->execute_query($sql)->fetch_all(MYSQLI_ASSOC);

$connection->close();
return $data;
}

//Thực thi lệnh insert, update, delete
function db_execute($sql){
    $connection = get_db_connection();
    $data = $connection->execute_query($sql);
    //Đóng kết nối
    $connection->close();

    return $data;
}