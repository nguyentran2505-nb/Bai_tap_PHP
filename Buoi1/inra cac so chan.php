
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>bai lam PHP</title>
    </head>
<body>
    <?php
//     for ($i = 0; $i <= 10; $i++) {
//     if ($i % 2 == 0) {
//         echo "$i ";
//     }
//  }
//     //in day so 10 9 8..... 2 1 0
//  echo "========";
//     for ($i = 10; $i >= 0; $i--) {
//         echo "$i ";
//     }

    // //Khai bao array la mang rong
        // $array =  [];
    // //them gia tri vao cuoi mang
        // $array[] = "Hello!";
        // $array[] = 99;

    //     // echo"<pre>";
    //     // print_r($array);
    //     // var_dump($array);
    //     // echo"</pre>";

    //     for($i = 0; $i < count($array);$i++){
    //         echo "$array[$i] <br>";
    //     }

        //B1 : Nhap so N tu URL
        //B2 : Taao mang  cac so chan < N
        //B3 : Dung var_dump in mang vua tao ra man hinh 

        // $n = $_GET['n']??-1;
        // $array = [];
        //  for ($i = 0; $i <= $n; $i+=2) {
        //     $array[] = $i;
        // }
        // echo "<pre>";
        // var_dump($array);
        // echo "</pre>";

        // foreach ($array as $k => $v){
        //     echo"$k => $v <br>";
        // }

        $array = [];
        $array ["name"] =  "Nguyenvippro";
        $array ["age"] = 20;
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
        
        // echo $array['name'] . "<br>";
        foreach ($array as $key => $value){
            echo"$key: $value <br>";
        }
?>
</body>
</html>