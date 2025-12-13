<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Elms+Sans:ital,wght@0,100..900;1,100..900&family=Playwrite+NO:wght@100..400&family=Roboto:ital,wght@0,100..900;1,100..900&family=Science+Gothic:wdth,wght@151.5,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <style>
    *{
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    }
    body{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    }
    .bg{
    position: fixed;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
    }

    .login-box{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center ;
    gap: 10px;
    padding: 40px;
    text-align: center;
    background-color: #fff;
    border-radius: 30px;
    }
    .login-box h2{
     font-family: "Playwrite NO", cursive;
     margin-bottom: 20px;
    }
    .input-box {
    width: 350px;
    margin: auto;
    }
    .input-box input{
    width: 80%;
    padding: 10px 15px;
    outline: 1px solid black;
    border-radius: 8px;
    border: none;
    }
    .input-box input:focus{
    outline: 2px solid blue;
    }
    .forgot{
    width: 100%;
    }
    .forgot a{
    float: right;
    margin-right: 20px;
    text-decoration: none;
    color: #000;
    font-size: 13px;
    }
    .forgot a:hover{
    color: #828CFB;
    }
    .btn{
    padding: 12px 16px   ;
    width: 90%;
    background-color: #828CFB;
    color: #000;
    /* font-size: 2px; */
    font-weight: 600;
    cursor: pointer;
    border-radius: 10px;
    border: none;
    position: relative;
    z-index: 1;
    }
    .btn-login::after{
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    height: 100%;
    width: 0px;
    border-radius: 10px;
    transition: all 0.4s ease;
    z-index: -1;
    }
    .btn-login:hover::after{
    color: #000;
    width: 100%;
    background-color: aqua;
    }
    .btn-google{
    background-image: linear-gradient(to right, green , aqua);
    color: #fff;
    position: relative;
    width: 90%;
    padding: 12px 16px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    text-align: center;
    transition: all 0.5s ease;
    }
    .btn-google:hover{
    opacity: 0.7;
    color: #000;
    }
    .fa-google{
    position: absolute;
    left: 16px;           
    top: 50%;
    transform: translateY(-50%);

    }
    hr{
    width: 90%;
    margin-top: 20px;
    }
    .sign-in{
    /* margin-top: 30px; */
    width: 100%;
    }
    .sign-in p{
    font-size: 13px;
    }
    .sign-in button{
    padding: 12px 16px   ;
    width: 90%;
    background-color: #121212;
    color: #fff;
    /* font-size: 2px; */
    font-weight: 600;
    cursor: pointer;
    border-radius: 10px;
    /* border: none; */
    margin-top: 20px;
    }
    .sign-in button a {
    text-decoration: none;
    color: #e5a134fa;
    }
    .sign-in button:hover{
    background-color: #fff;
    color: #000;
    }
    </style>
  </head>
  <body>
    <img class="bg" src="../img/book-wall-1151405_1280.jpg" alt="">
    <div class="login-box">
      <h2>Thư viên sách tuổi trẻ</h2>

      <div class="input-box">
        <input type="text" placeholder="Email hoặc tên đăng nhập" />
      </div>

      <div class="input-box">
        <input type="password" placeholder="Mật khẩu" />
      </div>
      <div class="forgot">
        <a href="">Quên mật khẩu ?</a>
      </div>
      <button class="btn btn-login">ĐĂNG NHẬP</button>
      <button class="btn btn-google">
        <i class="fa fa-google" aria-hidden="true"></i>
        TIẾP TỤC VỚI GOOGLE
      </button>
      <hr />
      <div class="sign-in">
        <p>Chưa có tài khoản ?</p>
        <button><a href="register.php">Đăng ký</a></button>
      </div>
    </div>
    <div class="footer"></div>
  </body>
</html>