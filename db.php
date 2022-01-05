<?php
//Kết nối tới Database
    $host='localhost';
    $username='root';
    $password='';
    $dbname = "db_nguoidung";
    $conn=mysqli_connect($host,$username,$password,$dbname);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>