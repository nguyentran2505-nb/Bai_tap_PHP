 <!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>bai lam PHP</title>
    </head>
<body>

    <form method="get">

        <div>
            <label>Your Name: </label>
            <input type="text" name ="Nhap_cai_ten_vo">
        </div>
        <br>
        <div>
            <input type="submit" value="Information">
        </div>
    </form>
    <?php
    $ten = $_GET['Nhap_cai_ten_vo']??'';
    if($ten){
        echo"Chao $ten !!!";
    }

?>
</body>
</html>