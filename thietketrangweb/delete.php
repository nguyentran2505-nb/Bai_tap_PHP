<?php 
include_once "common.php";

$id = $_GET['id'] ?? 0;

$sql = "DELETE FROM san_pham WHERE id=$id";

db_execute($sql);

header("location: index.php");
