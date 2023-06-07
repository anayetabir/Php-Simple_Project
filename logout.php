<?php

require 'connect.php';
$_SESSION = [];
session_unset();
session_destroy();
echo "<script>location.href='home.php'</script>";

?>