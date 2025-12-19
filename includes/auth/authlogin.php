<?php
include('db.php');
$error = "";
if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "Vui lòng nhập đầy đủ thông tin";
} else {    
    $tenDangNhap = $_POST['username'];
    $matKhau     = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = '$tenDangNhap'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($matKhau, $row['password'])) {
            $_SESSION['username'] = $tenDangNhap;
            $_SESSION['user_id'] = $row['id'];
            header('location: index.php');
            exit;
        } else {
            $error = "Sai tài khoản hoặc mật khẩu";
        }
    }
}
?>