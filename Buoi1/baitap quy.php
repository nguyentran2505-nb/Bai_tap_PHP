<?php 
$a = $_GET['a'];

if($a < 1 || $a > 12){
    echo "Khong co thang ngoai 1-12!!";
}

if ($thang >= 1 && $thang <= 3) {
    echo "Quý I";
} elseif ($thang >= 4 && $thang <= 6) {
    echo "Quý II";
} elseif ($thang >= 7 && $thang <= 9) {
    echo "Quý III";
} else {
    echo "Quý IV";
}

?>