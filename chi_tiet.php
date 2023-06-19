<?php 
          
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "daugia";
    $kq = [];
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $Id = $_GET['Id'];
   
    if($Id != '' && $Id > 0)
    {
      $sql = "SELECT * FROM product WHERE Id = '$Id' and deleted = 1 ";
      $result = mysqli_query($conn , $sql);
      while(($row = mysqli_fetch_array($result ,1)) != NULL)
      {
        $kq = $row;
      }
      $Nguoidang = $kq['Nguoidang'];
      $Tensp = $kq['Tensp'];
      $Sdt = $kq['Sdt'];
      $Mota = $kq['Mota'];
      $Hinhanh = $kq['Hinhanh'];
      $Giakhoidiem = $kq['Giakhoidiem'];
      $Giahientai = $kq['Giahientai'];
      $Id = $kq['Id'];
    }

    mysqli_close($conn);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./assest/css/chi_tiet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EveryThing.Moon</title>
</head>
<body>
    <div class="app">
        <header class="header">
                <div class="grid">
                    <nav class="header-navbar">
                        <ul class="header-navbar__list">
                            <li class="header-navbar__list-item">
                                <a href="" class="header-navbar__list-item__link">Nền tảng</a>
                            </li>
                            <li class="header-navbar__list-item">
                                <a href="offical.php" class="header-navbar__list-item__link">Trang chủ</a>
                            </li>
                            <li class="header-navbar__list-item">
                                <a href="quanly.php" class="header-navbar__list-item__link">Quản trị</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="div-search">
                        <div class="search">
                            <input type="text" class="search-input" placeholder= "Tìm kiếm">
                            <button class="btn-search">Tìm kiếm</button>
                        </div>
                    </div>
                    
                    <nav class="header-navbar">
                        <ul class="header-navbar__list">
                            <li class="header-navbar__list-item">
                                <a href="formcreat.php" class="header-navbar__list-item__link">Thêm</a>
                            </li>
                            <li class="header-navbar__list-item">
                                <a href="login.php" class="header-navbar__list-item__link">Thoát</a>
                            </li>
                        </ul>
                    </nav>
                </div>

        </header>

        <div class="container">
            <!-- Về sau sẽ xóa tất cả thông tin để thay thế dùng php từ đây -->
            <div class="grid__container grid__container--space">
                <div class="div-img">
                    <img src="./assest/picture/<?=$Hinhanh?>" style="width: 40%;" alt="" class="image">
                    <div class="img__price">
                        <h1 class="infor__giahientai">GIÁ HIỆN TẠI: <input class="infor__giahientai--active" value = "<?=number_format($Giahientai,0,',','.')?>" name = "Giahientai" id ="giahientai"> đ</h1>
                    </div>
                </div>

                <div class="div-infor">
                    <div class="div-infor--space">
                        <h1 class="infor__title"><?= $Tensp?></h1>
                        <h3 class="infor__rule"><span class="infor__rule infor__title--active">100%</span> chuẩn <span class="infor__rule infor__title--active">Hợp pháp,</span> đảm bảo <span class="infor__rule infor__title--active">Bảo mật!</span></h3>
                        <h5 class="infor__giakhoidiem">Giá khởi điểm: <span class="infor__giakhoidiem--active"id = "giakhoidiem"><?=number_format($Giakhoidiem , 0,',','.')?> đ</span></h5>
                        <h2 class="infor__nguoidang">Chủ nhân: xxx</h2>
                        <h2 class="infor__sdt">Phương thức liên lạc: <span class="infor__sdt infor__sdt--active"><?= $Sdt?></span></h2>
                        <div class="div-input">
                                <form action="capnhap.php" method="post" onsubmit = "view()">
                                    <input name = "id" type ="text"value = <?= $Id?> hidden>
                                    <label for="" class="infor__label">Mời nhập số tiền:</label>
                                    <input type="number" class="infor__input" name = "giamoinhat" step = 1 id = "tien" > <label for="">đ</label>
                                    <div class="div-end">
                                        <button  name = "submit" type = "submit" class="btn btn__accept" >Đăng</button>
                                    </div>
                                </form>

                                <div class="div-end">
                                    <a href="ketthuc.php?Id=<?=$Id?>" class=""><button type = "button " class="btn btn__end">Kết thúc</button></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid__container ">
                <div class="footer-infor ">
                    <h1 class="footer-infor__title">Mô tả sản phẩm</h1>
                    <span class="footer-infor__contain"><?= $Mota?></span>
                </div>
            </div>
            <div class="footer-link--space">
                <div class="footer-link">
                    <h3 class="footer-link__title">Nhóm <a href ="" class="strong">HKHKH</a> xây dựng</h3>
                    <div class="footer-link__back"> <a href="offical.php" class="back"><span class="footer-link__back">Về đầu trang</span></a></div>
                </div>
            </div>
       

        </div>
    </div>


    <script src="./assest/js/jquery-3.6.0.min.js"></script>
    <script src="./assest/js/chi_tiet.js"></script>
</body>
</html>