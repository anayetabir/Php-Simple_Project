<?php

include 'connect.php';


$id = $_GET['editid'];

$sql = "SELECT * FROM `product` WHERE productid=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$details = $row['details'];
$price = $row['price'];
$pic = $row['pic'];

// $imageTempLocation = $_FILES['pic']['tmp_name'];
// $imageName = $_FILES['pic']['name'];
// $imageLocalLocation = "pic/" . $imageName;
// move_uploaded_file($imageTempLocation, $imageLocalLocation);



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $details = $_POST['details'];
    $price = $_POST['price'];
    $pic = $_FILES['pic'];


    $imageTempLocation = $_FILES['pic']['tmp_name'];
    $imageName = $_FILES['pic']['name'];

    $imageLocalLocation = "pic/" . $imageName;

    move_uploaded_file($imageTempLocation, $imageLocalLocation);


    $sql = "UPDATE `product` SET `name`='$name',`details`='$details',`price`='$price',`pic`='$imageLocalLocation',`productid`='$id' where productid=$id";

    $result = mysqli_query($con, $sql);

    if (!$result) {
        echo "<script>alert('not inserted')</script>";
    } else {
        echo "<script>alert('Successfully updated')</script>";
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

    <title>Update Product</title>
</head>

<body>
    <div class="container my-5">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" placeholder="enter product name" autocomplete="off" name="name"
                    value=<?php echo $name; ?>>
            </div>
            <div class="form-group">
                <label class="form-label">Product Details</label>
                <input type="text" class="form-control" placeholder="enter product details" autocomplete="off"
                    name="details" value=<?php echo $details; ?>>
            </div>
            <div class="form-group">
                <label class="form-label">Product Price</label>
                <input type="number" class="form-control" placeholder="enter product price" autocomplete="off"
                    name="price" value=<?php echo $price; ?>>
            </div>
            <div class="form-group">
                <label class="form-label">Product Picture</label>
                <input class="form-control form-control-sm" type="file" name="pic" Required>
                
            </div>


            <button type="submit" class="btn btn-primary my-2" name="submit">Update</button>
        </form>


    </div>

</body>

</html>