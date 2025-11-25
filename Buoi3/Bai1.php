 <!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>bai lam PHP</title>
    </head>
<body>
    <h2>Mang</h2>

    <?php
    $a1 = [1,4,5,7];
    $a2 = [
        "Nguyễn",
        "Dung",
        "Tín"
    ];

    printArray($a1);
    echo"Tong:  " . sumArray($a1)."<br>";

    printArray($a2);

    function printArray(array $arr){
        foreach ($arr as $key => $value) {
            echo "$value <br>";
        }
        echo "<br>";
    }
    
    function sumArray(array $a) {
        $sum = 0;
        foreach ($a as $key => $value) {
            if (is_numeric($value)){
                $sum += $value;
            }
        }
       return $sum;
    }

    ?>
</body>
</html>