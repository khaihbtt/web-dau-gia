<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font awesome/fontawesome-free-5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./assest/css/main_login.css">

    <title>EveryThing.Moon</title>
</head>

<body>
    <form action = "loginsubmit.php" method="post">
    <div class="login" id="login">
        <h1>ĐĂNG NHẬP</h1>
        <div class="login-user" id="login-user">
            <i class="far fa-user"></i>
            <input type="text" class="username" id="username" name="username" placeholder="Tên đăng nhập">
            <!-- <div class="warn ">
                <span class="warn--correct" id="warn--correct">Tên người dùng không chính xác</span>
            </div> -->

        </div>

        <div class="login-pasword" id="login-pasword">
            <i class="fas fa-key"></i>
            <input name = "password" type="password" class="password" id="password" placeholder="Mật khẩu">
            <!-- <div class="warn ">
                <span class="warn--incorrect" id="warn--incorrect">Mật khẩu không chính xác</span>
            </div> -->
        </div>
        <button name ='submit' type="submit" class="btn-login" id="btn-login">Đăng nhập</button>
        <div class="creat">
            <h4>Bạn chưa có tài khoản!</h4>
            <a href="register.php"
                class="creat__accout">Tạo tài khoản</a>
        </div>
    </div>
</form>
    <script src="./assest/js/jquery-3.6.0.min.js"></script>
    <script src="./assest/js/main_login.js"></script>
</body>

</html>