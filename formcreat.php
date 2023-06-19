<!-- Phần test thử để xem có fill dữ liệu lên ô ko -->


<!-- Kết quả bên trên đã fill thành công . nhưng lưu ý là phải dùng cách kết nối mysql_connect thì ms lấy dc các trường dữ liệu nha vì nó có phần hỗ trợ kiểm tra toàn bộ các dòng mà -->

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./assest/css/formcreat.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./font awesome/fontawesome-free-5.15.4/css/all.min.css">
  <link rel="stylesheet" href="./assest/css/formcreat.css">
  <title>EveryThing.Moon</title>
</head>

<body>
  <header class="head">
  <nav class="navbar ">
    <div class="container-fluid" style = "display:flex; justify-content: space-evenly;">
      <a class="navbar-img" href="#"> <img src="./assest/picture/unnamed.png" alt="" width="50px"
          class="d-inline-block align-text-top">
        <span class = "navbar-img__heading">Đấu giá EveryThing.moon</span>
      </a>
      <div class="div-search">
        
          <i class="fas fa-search"></i>
          <input type="search" class="search-input" placeholder="Tìm kiếm...">
        
      </div>

      <div class="creat">
        <!-- Trở lại trang đấu giá -->
        <a href="offical.php" class=""><button class="btn btn-back">Tham gia</button> </a>
      </div>
    </div>
  </nav>
  </header>
  

  <container class="container">
  <div class="form">
      <div class="title">
          <h1>Thêm vật phẩm</h1>
          <br>
      </div>
      <div class="infor">

          <form action="creatsubmit.php" method = "post" class="form" onsubmit = "return test();">
          <br>
          <label class="form-label">Hình Ảnh : </label>
              <input required  = "true" type="file" id="anh" value = ""  name ="anh"  class="form-control" onchange = "viewaddress(this)">
              <div class="img">
                <img src=""  name="image" class="image" id ="image" style="margin-bottom: 18px;"> 
              </div>
              <label class="form-label">Người đăng:</label>
              <input type="text"  required  = "true" id="nguoidang" name="Nguoidang" value = ""class="form-control" >
              <br>

              <label class="form-label">Số điện thoại liên hệ:</label>
              <input type="text"  required  = "true" id="sdt" value = "" name="Sdt" class="form-control" >
              <br>

              <label class="form-label">Tên sản phẩm :</label>
              <input type="text" id="tensp" required = "true" name="Tensp" class="form-control">
                <br>

              <label class="form-label">Giá khởi điểm:</label>
              <input type="number" required id="giakhoidiem"  step = 1 value = "" name="Giakhoidiem" class="form-control" min = 1>
              <br>

              <label class="form-label">Mô tả :</label>
              <div class="form-floating">
                <textarea class="form-control" id="mota"  value = "" name = "Mota" style="height: 200px; padding-top: 15px;"></textarea>
              </div>
              <br>
              
              
             

              <button type="submit" name  ="submit" value = "submit" class="btn btn-success" id = "creat" style = "width:100px;">Tạo</button>

          </form>
      </div>
      </div>
  </container>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <script src="./assest/js/jquery-3.6.0.min.js"></script>
  <script src="./assest/js/formcreat.js"></script>
</body>

</html>