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

    <div class="container">
        <form action="save_create.php" method="POST">
            <div class="row mt-3">
                <div class="col-md-12" style="text-align: center;">
                    <h1>
                    Create Product
                    </h1>
                </div>
                <div class="col-md-6 offset-md-3">
                    <div class="form-group">
                        <label for="ProductName">Product Name <span style="color:red">*</span></label>
                        <input type="text" name="ProductName" id="ProductName" class="form-control" placeholder="Please enter data">
                    </div>
                    <div class="form-group">
                        <label for="ProductPicture">Product Picture <span style="color:red">*</span></label>
                        <input type="text" name="ProductPicture" id="ProductPicture" class="form-control" placeholder="Please enter data">
                    </div>
                    <div class="form-group">
                        <label for="ProductCategory">Product Category <span style="color:red">*</span></label>
                        <input type="text" name="ProductCategory" id="ProductCategory" class="form-control" placeholder="Please enter data">
                    </div>
                    <div class="form-group">
                        <label for="ProductDescription">Product Description <span style="color:red">*</span></label>
                        <input type="text" name="ProductDescription" id="ProductDescription" class="form-control" placeholder="Please enter data">
                    </div>
                    <div class="form-group">
                        <label for="ProductPrice">Product Price <span style="color:red">*</span></label>
                        <input type="number" name="ProductPrice" id="ProductPrice" class="form-control" placeholder="Please enter data">
                    </div>
                    <div class="form-group">
                        <label for="QuantityStock">Quantity Stock <span style="color:red">*</span></label>
                        <input type="number" name="QuantityStock" id="QuantityStock" class="form-control" placeholder="Please enter data">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>