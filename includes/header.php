<header>
  <div class="top-header">
    <div class="container nav-container">
      <div class="menu-left">
        <a href="index.php?page_layout=home">Trang chủ</a>
        <a href="index.php?page_layout=books">Sách</a>
      </div>

      <div class="menu-right">
        <?php
        session_start();
        if (!isset($_SESSION['username'])) {
        ?>
          <a href="register.php" class="btn">Đăng ký</a>
          <a href="login.php" class="btn login-btn">Đăng nhập</a>

        <?php
        } else {

          include "db.php";
          $id = $_SESSION['user_id'];
          $sql = "Select * from users where id = '$id'";
          $result = mysqli_query($conn,$sql);
          $user = mysqli_fetch_assoc($result);
        ?>
          <span style="color:white; font-size: 18px; font-weight: bold; margin-right: 10px;">Xin chào: <?php echo $user['full_name']; ?></span>
          <a href="index.php?page_layout=profile&id=<?php echo $id ?>" class="btn" >Thông tin cá nhân</a>
          <a class="btn" href="./logout.php">Đăng xuất</a>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</header>