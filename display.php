<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <title>Display</title>
</head>

<body>

    <div class="container">

        <h3 class="my-2">Products</h3>

        <a href="logout.php" class="btn btn-primary">LOGOUT</a>

        <div class="row">


            <?php

            $sql = "SELECT `name`, `details`, `price`, `pic`, `productid` FROM `product`";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['name'];
                    $details = $row['details'];
                    $price = $row['price'];
                    $pic = $row['pic'];
                    $productid = $row['productid'];


                    echo '<div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-group">
                        <div class="card my-3 mx-2">
                            <img class="card-img-top img-fluid" src="' . $pic . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $name . '</h5>
                                <p class="card-text">' . $details . '</p>
                                <h6 class="card-title">Price: ' . $price . '</h6>
                                <a href="edit.php?editid=' . $productid . '" class="btn btn-primary">Edit</a>
                                <a href="delete.php?deleteid=' . $productid . '" class="btn btn-primary">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>';




                }

            }


            ?>


        </div>

        <button class="btn btn-warning my-3"><a href="add_product.php" class="text-light"
                style="text-decoration: none ">Add Product</a></button>

    </div>

    

</body>

</html>