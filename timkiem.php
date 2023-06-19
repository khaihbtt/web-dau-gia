<?php 
          
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "daugia";
    $kq = [];
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    function getPost($key)
    {
        $value = '';
        if(isset($_POST[$key]))
            $value = $_POST[$key];
        return $value;
    }
    
    if(isset($_POST['timkiem']))
    {
        $timkiem =getPost('timkiem');
        $sql = "SELECT * FROM product WHERE deleted = 1 AND (Tensp LIKE '%$timkiem%' OR Giahientai LIKE '%$timkiem%')";
        $result = mysqli_query($conn , $sql);
    //     while(($row = mysqli_fetch_array($result ,1)) != NULL)
    //     {
    //         $kq = $row;
    //     }
    //     $Nguoidang = $kq['Nguoidang'];
    //     $Tensp = $kq['Tensp'];
    //     $Sdt = $kq['Sdt'];
    //     $Mota = $kq['Mota'];
    //     $Hinhanh = $kq['Hinhanh'];
    //     $Giakhoidiem = $kq['Giakhoidiem'];
    //     $Giahientai = $kq['Giahientai'];
    //     $Id = $kq['Id'];
    // }
    }
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./font awesome/fontawesome-free-5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./assest/css/offical.css">
    <title>EveryThing.Moon</title>
</head>

<body>
    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="navbar">
                    <ul class="navbar__list">
                        <li class="navbar__item navbar__item--sparate">Vào sàn đấu giá trên ứng dụng CPA</li>
                        <li class="navbar__item ">
                            Kết nối
                            <a href="https://www.facebook.com/" class="navbar__item--icon">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="navbar__item--icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar__list">
                        <li class="navbar__item">
                            <a href="" class="navbar__item--icon"><i class="far fa-bell"></i>Thông báo</a>
                        </li>
                        <li class="navbar__item navbar__item--sparate">
                            <a href="https://www.google.com.vn/?hl=vi" class="navbar__item--icon"><i
                                    class="far fa-question-circle"></i>Trợ giúp</a>
                        </li>
                        <li class="navbar__item">
                            <a href="login.php" class="navbar__item--link "><strong class="strong">Thoát</strong></a>
                        </li>

                    </ul>
                </nav>

                <div class="header-search">
                    <div class="header-logo">
                        <div class="header-logo--center"><img src="./assest/picture/unnamed.png" alt="" height="50px"
                                class="logo"></div>
                    </div>
                    <div class="div-search">
                        <form action="timkiem.php" method="post" class = "timkiem">
                            <div class="search">
                                <input type="text" name = "timkiem" class="search-input" placeholder="Nhập để tìm kiếm">
                            </div>
                            <div class="div-btn"><button name = "submit" class="btn-search"><i class="fas fa-search"></i></button></div>
                        </form>
                    </div>
                    <div class="div-creat">
                        <div class="creat-center"><a href="formcreat.php" class=""><button class="btn-creat">Thêm</button>
                            </a></div>
                    </div>
                </div>
            </div>
        </header>

        <div class="app__container">
            <div class="grid">
                <div class="grid__row app_content">
                    <div class="grid__columm-2">
                        <nav class="catergory">
                            <h3 class="catergory__heading"><i class="catergory__heading-icon fas fa-list"></i> Danh mục
                            </h3>

                            <ul class="catergory-list">
                                 <li class="catergory-item">
                                    <a href="offical.php" class="catergory-item__link">Trang chủ</a>
                                </li>
                            
                                <li class="catergory-item">
                                    <a href="register.php" class="catergory-item__link">Đăng ký</a>
                                </li>
                                <li class="catergory-item">
                                     <a href="login.php" class="catergory-item__link">Đăng nhập</a>
                                </li>   
                                <li class="catergory-item">
                                    <a href="quanly.php" class="catergory-item__link">Quản lý sản phẩm</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                            <!-- Phần tạo các ô lựa chọn như giá cao, giá rẻ -->
                    <div class="grid__columm-10">

                        <div class="home-filter">
                            <span class="home-filter__lable">Sắp xếp theo</span>
                            <a href="offical.php" class=""><button class="btn btn-cao btn-cao--active">Giá tổng hợp</button></a>
                            <a href="gia_cao.php" class=""><button class="btn btn-re">Giá cao</button></a>
 
                            <div class="home-filter__page">
                                <span class="home-filter__lable">
                                    <span class="page__number-current">1</span>/2
                                </span>
                                <div class="home-filter__page-control">
                                    <a href="" class="home-filter__page-btn">
                                        <i class="home-filter__page-icon fas fa-angle-left home-filter__page-icon-disable"></i>
                                    </a>
                                    <a href="" class="home-filter__page-btn">
                                        <i class="home-filter__page-icon fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>


                        </div>
                        
                    <!-- Đăng sản phẩm -->
                        <div class="product">
                            <div class="grid__row ">

                                <!-- Tạo sản phẩm từ đây -->
                                
                                <?php foreach($result as $item) :?>
                                        <div class="grid_columm-2-4">
                                            <div class="product__item">
                                                <div class="produc__item__img" >
                                                    <img src="./assest/picture/<?php  echo $item['Hinhanh'] ?>" alt="" class="img__anh">
                                                </div>
                                                <h4 class="product__item__name">Tên sp:<span class = "product__item__name-strong"><?php  echo $item['Tensp'] ?></span></h4>
                                                <div class="product__item__price">
                                                    <h4 class="product__item__price-title">Giá hiện tại:</h4>
                                                    <span class="product__item__price-new"><?php  echo $item['Giahientai'] ?> đ</span>
                                                </div>
                                                <div class="btn-join">
                                                    <a href="chi_tiet.php?Id=<?php  echo $item['Id'] ?>" class="btn-join__link"><button class="btn btn-vao">Vào đấu</button></a>
                                                </div>
                                            </div>
                                        </div>
                                <?php endforeach ; ?>

                                <!-- Bên dưới là vd về 1 sản phẩm dc hiện -->
                                <!-- <div class="grid_columm-2-4">
                                    <div class="product__item">
                                        <div class="produc__item__img" >
                                            <img src="./assest/picture/do_co_1.jpg" alt="" class="img__anh">
                                        </div>
                                        <h4 class="product__item__name">Tên sp:<span class = "product__item__name-strong">Phiến đá</span></h4>
                                        <div class="product__item__price">
                                            <h4 class="product__item__price-title">Giá hiện tại:</h4>
                                            <span class="product__item__price-new">1 200 000đ</span>
                                        </div>
                                        <div class="btn-join">
                                            <a href="" class="btn-join__link"><button class="btn btn-cao">Vào đấu</button></a>
                                        </div>
                                    </div>
                                </div>

                                 -->
                                <!-- Về sau sẽ xóa toàn bộ thông tin ở trên đi rồi viết câu 
                                    lệnh php ở đâu để in ra tất cả thông tin -->

                            </div>
                        </div>

                        <!-- tạo ô số -->

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
    <!-- <script src="./assest/js/main_website2.js"></script> -->
</body>

</html>