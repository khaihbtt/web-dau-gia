<?php
$Nguoidang=$_POST['Nguoidang'];
$Sdt=$_POST['Sdt'];
$Tensp=$_POST['Tensp'];
$Giakhoidiem=$_POST['Giakhoidiem'];
$Mota=$_POST['Mota'];
$anh=$_POST['anh'];
$Giahientai = $Giakhoidiem;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daugia";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO product (Nguoidang,Sdt,Tensp,Giakhoidiem,Giahientai,Mota,Hinhanh) 
        VALUES ('$Nguoidang','$Sdt','$Tensp','$Giakhoidiem' ,'$Giahientai', '$Mota' , '$anh')";

if (mysqli_query($conn, $sql)) {
  header("location:offical.php");
  die();
} 
else {
  header("location:formcreat.php");
  die();
}

mysqli_close($conn);
?>
