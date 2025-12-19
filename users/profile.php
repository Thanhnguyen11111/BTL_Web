<main>
    <div class="profile-layout">

        <div class="profile-left">
            <h2>Thông Tin Cá Nhân</h2>
            <?php
                $id =  $_GET['id'];
                $sql = "select * from users where id = '$id'";
                $result = mysqli_query($conn, $sql);
                $nguoidung = mysqli_fetch_assoc($result);
            ?>
            <form action="index.php?page_layout=profile&id=<?php echo $id ?>" method="POST" class="form">
                <div class="group">
                    <label for="fullname">Họ và tên</label>
                    <input name="fullname" type="text" value="<?php echo $nguoidung['full_name'] ?>">
                </div>

                <div class="group">
                    <label for="email">Email</label>
                    <input name="email" type="text" value="<?php echo $nguoidung['email'] ?>">
                </div>

                <div class="group">
                    <label for="phone">Số điện thoại</label>
                    <input name="phone" type="text" value="<?php echo $nguoidung['sdt'] ?>">
                </div>


                <button type="submit" class="edit-btn">Cập nhập</button>
            </form>
            <?php
                if (
                    !empty($_POST['fullname']) &&
                    !empty($_POST['email']) &&
                    !empty($_POST['phone'])
                ) {
                    $fullname = $_POST['fullname'];
                    $email = $_POST['email'];
                    $sdt = $_POST['phone'];

                    $sql = "UPDATE users SET full_name = '$fullname', email = '$email', sdt = '$sdt' WHERE id = '$id'";
                    mysqli_query($conn, $sql);

                    header("location: index.php?page_layout=profile&id=$id");
                }



            ?>
        </div>

        <div class="profile-right">
            <h2>Tài Khoản</h2>
            <form action="" method="POST" class="form">
                <div class="login-profile">
                    <div class="group">
                        <label for="username">Username</label>
                        <input name="username" type="text" value="<?php echo $nguoidung['username'] ?>" readonly>
                    </div>

                    <div class="group">
                        <label for="password">Password</label>
                        <input name="password" type="password" value="********" readonly>
                    </div>

                </div>
                <div class="change-password hidden">
                    <div class="group">
                        <label>Mật khẩu hiện tại</label>
                        <input name="old_password" type="password">
                    </div>

                    <div class="group">
                        <label>Mật khẩu mới</label>
                        <input name="new_password" type="password">
                    </div>

                    <div class="group">
                        <label>Nhập lại mật khẩu mới</label>
                        <input name="confirm_password" type="password">
                    </div>

                </div>
                <button type="button" class="change-btn">Bạn muốn đổi mật khẩu </button>
                <button type="submit" class="submit-btn hidden ">Đổi mật khẩu </button>

            </form>
            <?php
                if (
                    !empty($_POST['old_password']) &&
                    !empty($_POST['new_password']) &&
                    !empty($_POST['confirm_password'])
                ) {
                    $oldpassword = $_POST['old_password'];
                    $newpassword = $_POST['new_password'];
                    $confirmpassword = $_POST['confirm_password'];

                    if (!password_verify($oldpassword, $nguoidung['password'])) {
                        echo "<p style='color:red'>Mật khẩu hiện tại không đúng</p>";
                    } elseif ($newpassword !== $confirmpassword) {
                        echo "<p style='color:red'>Mật khẩu mới không khớp</p>";
                    } else {
                        $hash = password_hash($newpassword, PASSWORD_DEFAULT);
                        $sql = "UPDATE users SET password='$hash' WHERE id=$id";
                        mysqli_query($conn, $sql);
                        echo "<p style='color:red'>Đổi thành công</p>";
                    }
                }



            ?>
        </div>



    </div>
</main>