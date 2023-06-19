<?php 
          
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "daugia";
    $kq = [];
    if(!empty($_POST))
    {

    $Id = $_POST['Id'];
    $anh = $_POST['anh'];
    $Nguoidang=$_POST['Nguoidang'];
    $Sdt=$_POST['Sdt'];
    $Tensp=$_POST['Tensp'];
    $Giakhoidiem=$_POST['Giakhoidiem'];
    $Mota=$_POST['Mota'];

    $Giahientai = $Giakhoidiem;
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM product WHERE Hinhanh = '$anh ' OR Tensp = '$Tensp'";
    $kq = mysqli_query($conn , $sql);
    if($kq != NULL)
    {   
        $sql = "UPDATE product SET Nguoidang = '$Nguoidang',Tensp = '$Tensp' , Mota = '$Mota' , Giakhoidiem = '$Giakhoidiem' ,Giahientai = '$Giahientai',Sdt = '$Sdt' WHERE Id = '$Id' and deleted = 1";
        $result = mysqli_query($conn , $sql);
        header("location:suathongtin.php");
        die();
    }
}   
    mysqli_close($conn);
?>