<?php

$y = $_GET['y'];

if ($y % 4 ==0 && $y %  400==0 || $y %100!=0) {
    echo "$y la nam nhuan";
}else{
    echo "$y khong phai la nam nhuan";
}

?>