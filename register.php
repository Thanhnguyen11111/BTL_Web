<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    .form-box{
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
    .form-box h2{
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
    .btn{
    padding: 12px 16px   ;
    width: 90%;
    background-color: #2f8ae0ff;
    color: #000;
    font-weight: 600;
    cursor: pointer;
    border-radius: 10px;
    border: none;
    position: relative;
    z-index: 1;
    }
    .btn-create::after{
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
    .btn-create:hover::after{
    color: #000;
    width: 100%;
    background-color: aqua;
    }
    </style>
</head>
<body>
<div class="form-box">
    <h2>Đăng ký</h2>

        <div class="input-box">
            <input type="text" placeholder="Tên người dùng">
        </div>
        <div class="input-box">
            <input type="email" placeholder="Email">
        </div>

        <div class="input-box">
            <input type="password" placeholder="Mật khẩu" />
        </div>
        <button class="btn btn-create">Tạo tài khoản</button>

</div>

</body>
</html>