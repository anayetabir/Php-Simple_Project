<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $details = $_POST['details'];
    $price = $_POST['price'];
    $pic = $_FILES['pic'];


    $imageTempLocation = $_FILES['pic']['tmp_name'];
    $imageName = $_FILES['pic']['name'];

    $imageLocalLocation = "pic/" . $imageName;

    move_uploaded_file($imageTempLocation, $imageLocalLocation);


    $sql = "INSERT INTO `product`(`name`, `details`, `price`, `pic`) 
     VALUES ('$name','$details','$price','$imageLocalLocation')";

    $result = mysqli_query($con, $sql);

    if (!$result) {
        echo "<script>alert('not inserted')</script>";
    } else {
        echo "<script>alert('Successfully inserted')</script>";
        echo "<script>location.href='display.php'</script>";
    }


}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <title>Add Product</title>
</head>

<body>
    <div class="container my-5">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" placeholder="enter product name" autocomplete="off" name="name" Required>
            </div>
            <div class="form-group">
                <label class="form-label">Product Details</label>
                <input type="text" class="form-control" placeholder="enter product details" autocomplete="off"
                    name="details" Required>
            </div>
            <div class="form-group">
                <label class="form-label">Product Price</label>
                <input type="number" class="form-control" placeholder="enter product price" autocomplete="off"
                    name="price" Required>
            </div>
            <div class="form-group">
                <label class="form-label">Product Picture</label>
                <input class="form-control form-control-sm" type="file" name="pic" Required>
            </div>


            <button type="submit" class="btn btn-primary my-2" name="submit">Submit</button>
        </form>


    </div>

</body>

</html>