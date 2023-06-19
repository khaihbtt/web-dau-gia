<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./font awesome/fontawesome-free-5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./assest/css/quanly.css">
    <title>EveryThing.Moon</title>
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="grid grid__quanly">
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
                        <form action="timkiem.php" method="post">
                        <input type="text" name = "timkiem" class="search-input" placeholder= "Tìm kiếm">
                        <button class="btn-search">Tìm kiếm</button>
                        </form>
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

        <div class="app__container">
            <div class="grid">
                <div class="grid__row app_content">
                    <div class="grid__columm-2">
                        <nav class="catergory">
                            <h3 class="catergory__heading"><i class="catergory__heading-icon fas fa-list"></i> Quản Lý
                            </h3>
                            <ul class="catergory-list">
                                 <li class="catergory-item">
                                    <a href="quanly.php" class="catergory-item__link ">Sản phẩm đang đấu</a>
                                </li>
                                <li class="catergory-item">
                                    <a href="suathongtin.php" class="catergory-item__link">Sửa thông tin</a>
                                </li>
                                <li class="catergory-item">
                                    <a href="dadau.php" class="catergory-item__link catergory-item__link--active">Sản phẩm đã đấu</a>
                                </li>
                                
                            </ul>

                            
                        </nav>
                    </div>

                            <!-- Phần tạo các ô lựa chọn như giá cao, giá rẻ -->
                    <div class="grid__columm-10 grid__columm-10--space">

                
                        
                    <!-- Đăng sản phẩm -->
                        <div class="product">
                            <div class="grid__row ">

                                <!-- Tạo sản phẩm từ đây -->
                                
                                <?php
                                   
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "daugia";

                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    $sql = "SELECT * FROM product WHERE deleted = 0 AND Tinhtrang = 1";
                                    $kq =$conn->query($sql);

                                    foreach($kq as $item){
                                        echo '
                                        <div class="grid_columm-2-4">
                                            <div class="product__item">
                                                <div class="produc__item__img" >
                                                    <img src="./assest/picture/'.$item['Hinhanh'].'" alt="" class="img__anh">
                                                </div>
                                                <h4 class="product__item__name">Tên sp:<span class = "product__item__name-strong">'.$item['Tensp'].'</span></h4>
                                                <div class="product__item__price">
                                                    <h4 class="product__item__price-title">Giá khởi điểm:</h4>
                                                    <span id = "giakhoidiem" class="product__item__price-new">'.number_format($item['Giakhoidiem'],0,',','.').' đ</span>
                                                </div>
                                                <div class="product__item__price">
                                                    <h4 class="product__item__price-title">Giá chốt:</h4>
                                                    <span class="product__item__price-new">'.number_format($item['Giahientai'],0,',','.').' đ</span>
                                                </div>
                                                <div class="btn-join">
                                                     <button class="btn btn-xoa" onclick= "updated('.$item['Id'].')" style = "height: 36px;
                                                    width: 70px;
                                                    margin-top:10px;
                                                    outline: none;
                                                    padding-left: 20px;
                                                    padding-right: 20px;
                                                    border: none;
                                                    background: #3498db;
                                                    text-align: center;
                                                    color: black;
                                                    font-size: 14px;
                                                    cursor: pointer;
                                                    border-radius: 3px;
                                                    transition: 0.25s;
                                                    opacity: 1;">Đăng lại</button>
                                                </div>
                                            </div>
                                    </div>';
                                    }

                                ?>




                            </div>
                        </div>

                
                        
                        
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid_columm-2-4">
                        <h4 class="footer__heading">Chăm sóc khách hàng</h4>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Trung tâm trợ giúp</a>
                            </li>
                             <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Hãng CPA </a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Hướng dẫn đấu giá</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid_columm-2-4">
                        <h4 class="footer__heading">Giới thiệu</h4>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Giới thiệu</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Tuyển dụng</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Hướng dẫn điều khoản</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid_columm-2-4">
                        <h4 class="footer__heading">Theo dõi chúng tôi trên</h4>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link"><i class="footer__item-icon fab fa-facebook"></i>Facebook</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link"><i class="footer__item-icon fab fa-instagram-square"></i>Instagram</a>
                             </li>
                             <li class="footer__list-item">
                                <a href="" class="footer__list-item-link"><i class="footer__item-icon fab fa-linkedin"></i>ShopCPA</a>
                            </li>
                        </ul>
                    </div>

                    <div class="grid_columm-2-4">
                        <h4 class="footer__heading">Người xây dựng chương trình này</h4>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Nguyễn Đình Khánh</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Nguyễn Hữu Khải</a>
                             </li>
                             <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Nguyễn Trung Hiếu</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Nguyễn Huy Hoàng</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item-link">Nguyễn Văn Hòa</a>
                            </li>
                            </ul>
                    </div>

                </div>
                
            </div>
        </footer>

    </div>









    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script> -->
    <script src="./assest/js/jquery-3.6.0.min.js"></script>
    <script src="./assest/js/quanly.js"></script>
</body>

</html>