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
      $sql = "SELECT * FROM product WHERE Id = '$Id' ";
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

      $sql = "UPDATE product SET deleted = 0 WHERE Id = '$Id'";
      $result = mysqli_query($conn , $sql);
      if ($result)
        header("location:offical.php");

      
    }

    mysqli_close($conn);
?>