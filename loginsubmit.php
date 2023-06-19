<?php
$name= $_POST['username'];
$pass = $_POST['password'];
$pass = md5($pass);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daugia";

$conn = new mysqli($servername, $username, $password, $dbname);
if( $pass == "" || $name ==""){
       header("location:login.php");  
}
else
{
  $sql = "SELECT * FROM user WHERE Taikhoan = '$name' and Matkhau = '$pass'";
  $kq =$conn->query($sql);  
    if( mysqli_fetch_array($kq))
    {
        header("location:website.php");
    }
    else {
        header("location:index.php");  
    }
  $conn->close();
}
?>