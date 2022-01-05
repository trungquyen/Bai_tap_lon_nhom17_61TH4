<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "db_images";

// B1:kết nối database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) { //truy cập thuộc tính/phương thức của 1 đối tượng trong php
    die("Connection failed: " . $db->connect_error);
}
?>