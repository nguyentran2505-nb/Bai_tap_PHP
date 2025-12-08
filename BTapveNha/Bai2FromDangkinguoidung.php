<!DOCTYPE html>
<html>
<head>
    <title>From đăng kí người dùng</title>
</head>
<body>

<h2>Đăng kí người dùng</h2>


<form method ="POST">
    <label>Họ và Tên đăng kí:</label>
    <input name="ten" required> 
    <br>

    <label>Email:</label>
    <input type="email" name="email" required>
    <br>

    <label>Mật Khẩu:</label>
    <input type="password" name="matkhau" required minlength="nhỏ nhất 6 số!!!!">
    <br>

    <label>Xác Nhận Mật Khẩu:</label>
    <input type="password" name="xacnhanmk" required>
    <br>

    <label>Ngày Sinh:</label>
    <input type="date" name="ngaysinh" required>
    <br>

    <label>Giới Tính:</label>
    <input type="radio" name="sex" value="nam" required>
    <input type="radio" name="sex" value="nữ" required>
    <input type="radio" name="sex" value="..." required>
    <br>

    <label>Sở Thích:</label>
    <input type="checkbox" name="fvr" value="ngủ" required>
    <input type="checkbox" name="fvr" value="ăn" required>
    <input type="checkbox" name="fvr" value="chơi" reuired>
    <input type="checkbox" name="fvr" value="pwfol" required>
    <br>

    <label>Thành Phố:</label>
    <selec name="tp">
        <option value="CT"> Cần Thơ </option>
        <option value="TPHCM"> Thành Phố Hồ Chí Minh </option>
        <option value="HN"> Hà Nội </option>
    </selec>
    <br>

    <button type="submit" name="Dk">Đăng Kí</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hoten = $_POST["hoten"];
    $email = $_POST["email"];
    $mk = $_POST["matkhau"];
    $xnmk = $_POST["xnmatkhau"];
    $ngaysinh = $_POST["ngaysinh"];
    $gioitinh = $_POST["gioitinh"] ?? "";
    $sothich = $_POST["sothich"] ?? [];
    $thanhpho = $_POST["thanhpho"];

    $loi = "";


    if ($hoten == "" || $email == "" || $mk == "" || $xnmk == "") {
        $loi = "Vui lòng nhập đầy đủ thông tin!";
    }

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $loi = "Email không đúng định dạng!";
    }

    elseif (strlen($matkhau) < 6) {
        $loi = "Mật khẩu phải từ 6 ký tự!";
    }

    elseif ($matkhau != $xacnhanmk) {
        $loi = "Mật khẩu xác nhận không khớp!";
    }

    elseif ($ngaysinh != "") {
        $tuoi = date("Y") - date("Y", strtotime($ngaysinh));
        if ($tuoi < 18) {
            $loi = "Bạn chưa đủ 18 tuổi!";
        }
    }

    if ($loi != "") {
        echo "<b style='color:red'>$loi</b>";
    } 
    else {
        echo "<h3>Đăng ký thành công!</h3>";
        echo "Họ tên: $hoten <br>";
        echo "Email: $email <br>";
        echo "Giới tính: $gioitinh <br>";
        echo "Ngày sinh: $ngaysinh <br>";
        echo "Sở thích: " . implode(", ", $sothich) . "<br>";
        echo "Thành phố: $thanhpho <br>";
}
}
?>
</body>
</html>