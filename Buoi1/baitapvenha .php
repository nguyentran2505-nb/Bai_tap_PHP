<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>bai lam PHP</title>
    </head>
<body>
    <?php
$n = $_GET['n'] ?? 1;

echo "<h3>Bảng cửu chương của $n</h3>";

for ($i = 1; $i <= 10; $i++) {
    echo "$n x $i = " . ($n * $i) . "<br>";
}
?>
</body>                  
</html>