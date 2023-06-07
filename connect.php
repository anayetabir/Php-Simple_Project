<?php
$con = new mysqli('localhost', 'root', '', 'productlist');

if (!$con) {
    die(mysqli_error($con));
}

?>