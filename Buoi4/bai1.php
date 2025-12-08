<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>bai lam PHP</title>
    </head>
<body>
<?php if ($hasValue): ?>
    <h4>Xin chao ...</h4>
    <p>Nam nay ... tuoi</p>
<?php  else: ?>
    <h4>Chua co gia tri </h4>
    <form action="result.php" method="post">
            <label>Nhap tuoi cua ban: </label>
            <input type="text" name ="Ho Ten">
        <br>
        <label>Nam sinh cua ban: </label>
            <input type="text" name ="Nam Sinh" min="1990" max="2026"/>
            <br>

            <input type="submit" value="information"/>
</form>
</body>
</html>