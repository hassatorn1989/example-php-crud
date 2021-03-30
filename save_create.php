<?php
require('connect.php');
echo $sql = "INSERT INTO products (ProductName, ProductPicture, ProductCategory, ProductDescription, Price, QuantityStock ) VALUES ('" . $_POST['ProductName'] . "', '" . $_POST['ProductPicture'] . "','" . $_POST['ProductCategory'] . "','" . $_POST['ProductDescription'] . "','" . $_POST['ProductPrice'] . "','" . $_POST['QuantityStock'] . "')";
mysqli_query($con, $sql);

header('location:index.php');
