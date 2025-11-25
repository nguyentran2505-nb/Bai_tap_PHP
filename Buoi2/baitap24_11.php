<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>bai lam PHP</title>
    </head>
<body>
    <h2>hinh vuong N*N</h2>
    <h2>N=4</h2>
    <?php
//vòng lặp
$n = 4;
$stt = 1;
For($i = 1; $i <= $n; $i++){
    For($j = 1; $j <= $n; $j++){
        echo " $stt ";
        $stt++;
        }
        echo "<br>";
    }
    ?>
</body>
</html>