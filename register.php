<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font awesome/fontawesome-free-5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./assest/css/main_register.css">

    <title>EveryThing.Moon</title>
</head>

<body>

    <div class="register">
        <h1>ĐĂNG KÝ</h1>
        <form action="registersubmit.php" method = "post">
        <div class="register-user">
            <input type="text" class="username" id="username" name="username" placeholder="Tên đăng nhập" onchange="user()" onclick="viewuser()">
            <div class="warn ">
                <span class="warn--correct" id="warn-user--incorrect">Tên người dùng không chính xác</span>
            </div>
        </div>

        <div class="login-pasword">
            <input type="password" class="password" id="password" name="password" placeholder="Mật khẩu" onchange="pass()" onclick="viewpass()"> 
            <div class="warn "> 
                <span class="warn--incorrect" id="warn-pass--incorrect">Mật khẩu không chính xác</span>
            </div>
        </div>

        <div class="login-pasword login-password--again">
            <input type="password" class="password password--again" id="repassword" name="repassword" placeholder="Nhập lại mật khẩu" onchange = "repass()" onclick="viewrepass()">
            <div class="warn ">
                <span class="warn--incorrect" id="warn-repass--incorrect">Mật khẩu không trùng khớp</span>
            </div>
        </div>

        <div class="link">
            <a href="login.php"><button type="button"
                    class="btn-register">Trở lại</button></a>
            <button type="submit" class="btn-register" >Tạo</button>
        </div>
        </form>

        <div class="tool">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-google"></i>
            <i class="fab fa-yahoo"></i>
            <i class="fab fa-youtube"></i>
        </div>
    </div>
    <script src="./assest/js/jquery-3.6.0.min.js"></script>
    <script src="./assest/js/main_register.js"></script>
</body>

</html>