<?php
require('connect.php');
//  $sql = "INSERT INTO products (ProductName, ProductPicture, ProductCategory, ProductDescription, Price, QuantityStock ) VALUES ('" . $_POST['ProductName'] . "', '" . $_POST['ProductPicture'] . "','" . $_POST['ProductCategory'] . "','" . $_POST['ProductDescription'] . "','" . $_POST['ProductPrice'] . "','" . $_POST['QuantityStock'] . "')";
 $sql = "UPDATE products SET ProductName = '" . $_POST['ProductName'] . "', ProductPicture = '" . $_POST['ProductPicture'] . "', ProductCategory = '" . $_POST['ProductCategory'] . "', ProductDescription = '" . $_POST['ProductDescription'] . "', Price = '" . $_POST['ProductPrice'] . "', QuantityStock = '" . $_POST['QuantityStock'] . "' WHERE ProductID =  '" . $_POST['id'] . "'";
mysqli_query($con, $sql);
header('location:index.php');
