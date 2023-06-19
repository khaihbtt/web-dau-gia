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
    $sql = "UPDATE product SET deleted = 0, Tinhtrang = 0 WHERE Id = '$Id'";
    $result = mysqli_query($conn , $sql);

    mysqli_close($conn);
?>