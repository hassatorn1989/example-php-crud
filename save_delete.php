<?php
require('connect.php');
$sql = "DELETE FROM products WHERE ProductID = '".$_POST['id']."'";
mysqli_query($con, $sql);
header('location:index.php');
