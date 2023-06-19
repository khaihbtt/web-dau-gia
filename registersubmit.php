<?php
$repass=$_POST['repassword'];
$name= $_POST['username'];
$pass = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daugia";
$conn = new mysqli($servername, $username, $password, $dbname);
if($pass!=$repass  || $pass == "" || $repass == "" || $name ==""){
  header("location:register.php"); 
}
else
{
  header("location:index.php");
  $pass = md5($pass);
  $sql = "INSERT INTO user (Taikhoan, Matkhau) VALUES ('$name', '$pass')";
  $conn->query($sql);
  $conn->close();
}
?>