<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "shop";
$con = mysqli_connect($host, $username, $password, $db_name); //annanusurawa 
mysqli_set_charset($con, "utf8"); // A php lu$un ma'luu web browser
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
