<link rel="stylesheet" href="../assets/css/style.css">
<?php include '../includes/header.php'; ?>

<main>
  <div class="profile-layout">

    <div class="profile-left">
        <h2>Thông Tin Cá Nhân</h2>

        <form action="profile.php" method="POST" class="form">
            <div class="group">
                <label for="fullname">Họ và tên</label>
                <input type="text" required>
            </div>

            <div class="group">
                <label for="email">Email</label>
                <input type="text" required>    
            </div>

            <div class="group">
                <label for="phone">Số điện thoại</label>
                <input type="text" required>
            </div>

            <div class="group">
                <label for="address">Địa chỉ</label>
                <input type="text" required>
            </div>

            <button type="submit" class="edit-btn">Sửa</button>
        </form>
    </div>

    <div class="profile-right">
        <h2>Tài Khoản</h2>
         <form action="account.php" method="POST" class="form">
            <div class="group">
                <label for="username">Username</label>
                <input type="text" required>
            </div>

            <div class="group">
                <label for="password">PassWord</label>
                <input type="text" required>
            </div>
    </div>

</div>
</main>
<?php include '../includes/footer.php'; ?>