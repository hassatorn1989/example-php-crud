<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    require('connect.php')
    ?>
    <div class="container">
        <div class="col-md-12" style="text-align: center;">
            <h1>
                Product
            </h1>
        </div>
        <form action="" method="post">
            <div class="row mb-3 mt-3">
                <div class="col-md-3">
                    <input type="text" name="filter" id="filter" class="form-control" placeholder="Filter" value="<?php echo (!empty($_POST['filter'])) ? $_POST['filter'] : '' ?>">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-block">Search</button>
                </div>
                <div class="col-md-2 ">
                    <button type="reset" class="btn btn-primary btn-block">Reset</button>
                </div>
                <div class="col-md-3 offset-md-2">
                    <a href="create.php" class="btn btn-primary btn-block">Create a new product</a>
                </div>

            </div>
        </form>
        <div class="row">

            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Picture</th>
                            <th>Category</th>
                            <th>Product Description</th>
                            <th>Price</th>
                            <th>Quantity Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $cond = (!empty($_POST)) ? "WHERE ProductName LIKE '%" . $_POST['filter'] . "%' OR ProductName LIKE '%" . $_POST['filter'] . "%' OR ProductCategory LIKE '%" . $_POST['filter'] . "%' OR ProductDescription LIKE '%" . $_POST['filter'] . "%'" : '';
                        $sql = "SELECT * FROM `Products` " . $cond;
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                        ?>
                                    <tr>
                                        <td scope="row"><?php echo $row['ProductID']; ?></td>
                                        <td><?php echo $row['ProductName']; ?></td>
                                        <td><img src="<?php echo $row['ProductPicture']; ?>" alt="" width="100"></td>
                                        <td><?php echo $row['ProductCategory']; ?></td>
                                        <td><?php echo $row['ProductDescription']; ?></td>
                                        <td><?php echo $row['Price']; ?></td>
                                        <td><?php echo $row['QuantityStock']; ?></td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $row['ProductID'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="delete.php?id=<?php echo $row['ProductID'] ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td align="center" colspan="8">
                                        <span style="color:red"><strong>Data Not Found</strong></span>
                                    </td>
                                </tr>
                        <?php
                            }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>