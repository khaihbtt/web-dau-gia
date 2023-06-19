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

    $Id = getPost('Id');

    if($Id != '' && $Id > 0)
    {
      $sql = "SELECT * FROM product WHERE Id = '$Id'";
      $result = mysqli_query($conn , $sql);
      while(($row = mysqli_fetch_array($result ,1)) != NULL)
      {
        $kq = $row;
      }

      $Giakhoidiem = $kq['Giakhoidiem'];
      $Giahientai = $Giakhoidiem;
      $sql = "UPDATE product SET deleted = 1 , Giahientai = '$Giahientai' WHERE Id = '$Id'";
      $result = mysqli_query($conn , $sql);

    }

    
      


    mysqli_close($conn);
?>