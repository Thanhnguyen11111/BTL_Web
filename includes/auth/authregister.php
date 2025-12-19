<?php
    include("db.php");
    $errors = "";
    if (isset($_POST['username']) && 
        isset($_POST['password']) && 
        isset($_POST['confirm'])  && 
        isset($_POST['email']) &&
        isset($_POST['fullname']) &&
        isset($_POST['sdt']) 
        ) {

        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $confirm  = $_POST['confirm'];
        $fullname = $_POST['fullname'];        
        $sdt = $_POST['sdt'];        


        if ($username === '' || $email === '' || $password === '' || $confirm === '' || $fullname === '' || $sdt === ' ') {
            $errors = "Vui lòng nhập đầy đủ thông tin";
        } elseif ($password !== $confirm) {
            $errors = "Mật khẩu nhập lại không khớp";
        } else {
            // kiểm tra username
            $sql = "SELECT id FROM users WHERE username='$username'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $errors = "Tên đăng nhập đã tồn tại";
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO users(username,password,full_name,email,sdt,role_id)
                        VALUES('$username','$hash','$fullname','$email','$sdt',2)";

                if (mysqli_query($conn, $sql)) {
                    header("Location: login.php");
                    exit;
                } else {
                    $errors = "Lỗi hệ thống";
                }
            }
        }
    }
?>