<?php

include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `product` WHERE productid=$id";
    $result=mysqli_query($con,$sql);
    
    
    if (!$result) {
        echo "<script>alert('not deleted')</script>";
    } else {
        echo "<script>alert('Successfully deleted')</script>";
        echo "<script>location.href='display.php'</script>";
    }
    
}

?>