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
    $Moinhat = getPost('giamoinhat');
    $Id = getPost('id');
    if($Id != ''&& $Id >0)
    {
    $sql = "SELECT * FROM product WHERE Id = '$Id'";
    $result = mysqli_query($conn , $sql);
    while(($row = mysqli_fetch_array($result ,1)) != NULL)
      {
        $kq = $row;
      }
      $Giahientai = $kq['Giahientai'];
      $Id = $kq['Id'];
    }

    if($Moinhat <= $Giahientai)
    {
        header("location:chi_tiet.php?Id=$Id");
    }
    else
    {
        $sql = "UPDATE product SET Giahientai = '$Moinhat' WHERE Id = '$Id'";
        $result = mysqli_query($conn , $sql);
        header("location:chi_tiet.php?Id=$Id");    
    }



    mysqli_close($conn);
?>