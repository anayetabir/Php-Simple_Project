<?php

include 'connect.php';

if (isset($_POST['reg'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $duplicate=mysqli_query($con,"SELECT * FROM `log` WHERE username='$username' OR email = '$$email'" );
    if (mysqli_num_rows($duplicate)>0) {
        echo "<script>alert('username or email has already taken');</script>";
    } else {
        $query = "INSERT INTO `log`(`username`, `email`, `pass`) VALUES ('$username','$email','$pass')";
        mysqli_query($con,$query);
        echo "<script>alert('Registration Successful');</script>";
        
    }

    // $sql = "INSERT INTO `log`(`username`, `email`, `pass`) 
    //  VALUES ('$username','$email','$pass')";

    // $result = mysqli_query($con, $sql);

    // if (!$result) {
    //     echo "<script>alert('not registerd')</script>";
    // } else {
    //     echo "<script>alert('Successfully registerd')</script>";
    //     // echo "<script>location.href='display.php'</script>";
    // }
    
    

}

if (isset($_POST['login'])){
    $username=$_POST['username'];
    $pass=$_POST['pass'];

    $result=mysqli_query($con,"SELECT * FROM `log` WHERE username='$username' OR email = '$$email'" );
    $row=mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result)>0) {
        if ($pass == $row['pass']) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id'];
            echo "<script>location.href='display.php'</script>";
        }else {
            echo "<script>alert('wrong password');</script>";
        }
    } else {
        echo "<script>alert('user not registered');</script>";
        
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login and Registration</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <div class="form-wrapper sign-in">
            <form action="" method="POST">
                <h2>Sign In</h2>

                <div class="input-group">
                    <input type="text" name="username" required>
                    <label for="">Username</label>
                </div>

                <div class="input-group">
                    <input type="password" name="pass" required>
                    <label for="">Password</label>
                </div>

                <div class="remember">
                    <label for=""><input type="checkbox">Remember me</label>
                </div>

                <button type="submit" name="login">Sign In</button>

                <div class="signUp-link">
                    <p>Don't have an account?<a href="#" class="signUpBtn-link">Sign Up</a></p>
                </div>
            </form>
        </div>


        <!-- Registration -->
        <div class="form-wrapper sign-up">
            <form action="" method="POST">
                <h2>Sign Up</h2>

                <div class="input-group">
                    <input type="text" name="username" required>
                    <label for="">Username</label>
                </div>

                <div class="input-group">
                    <input type="email" name="email" required>
                    <label for="">Email</label>
                </div>


                <div class="input-group">
                    <input type="password" name="pass" required>
                    <label for="">Password</label>
                </div>

                <!-- <div class="input-group">
                    <input type="password" required>
                    <label for="">C.Password</label>
                </div> -->

                <div class="remember">
                    <label for=""><input type="checkbox">I agree to the terms & conditions</label>
                </div>

                <button type="submit" name="reg" >Sign Up</button>

                <div class="signUp-link">
                    <p>Already have an account?<a href="#" class="signInBtn-link">Sign In</a></p>
                </div>
            </form>
        </div>

    </div>


    <script src="script.js"></script>

</body>

</html>