<?php

include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>HILORANG</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
</head>

<body>
    <!--------------NAV-------------->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand mx-2" href="#">HILORANG</a>
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                        <h4 class="text-white">Collapsed content</h4>
                        <span class="text-muted">Toggleable via the navbar brand.</span>
                    </div>
                </div>
                <nav class="navbar navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Our Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login" href="login_reg.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <section id="head">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </section>

    <!-- ------PRoducts ------->

    <section id=product>
        <div class="container">

            <h1 class="my-2">Products</h1>


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
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>';


                    }

                }

                ?>

            </div>
        </div>
    </section>

    <!--------------About-------------->
    <section id="About">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About-Us</h2>
                    <div class="about-content">
                        Hilorang brings you premium outfit collection for both men and women.
                        Our team of creative individuals values all your feedbacks and takes them all into account and
                        constantly look for approaches to serve you better.
                    </div>
                </div>
                <div class="col-md-6 p-bar">
                    <h2>Website Created Using</h2>
                    <p>HTML</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 30%;">30%</div>
                    </div>
                    <p>CSS</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 20%;">20%</div>
                    </div>
                    <p>BOOT STRAP</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 20%;">20%</div>
                    </div>
                    <p>PHP</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 30%;">30%</div>
                    </div>
                    

                </div>
            </div>
        </div>
    </section>


    <!--------------Services-------------->
    <section id="services">
        <div class="container">
            <h1>Our Services</h1>
            <div class="row services">
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa-sharp fa-light fa-shirt"></i>
                    </div>
                    <h3>Custom T-shirt</h3>
                    <p>A t-shirt is a type of fabric with short sleeves that covers our arms and shoulders.</p>
                </div>

                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa-sharp fa-light fa-shirt"></i>
                    </div>
                    <h3>Custom Hoodie</h3>
                    <p>A t-shirt is a type of fabric with short sleeves that covers our arms and shoulders.</p>
                </div>

                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa-sharp fa-light fa-shirt"></i>
                    </div>
                    <h3>Selling our own merch</h3>
                    <p>A t-shirt is a type of fabric with short sleeves that covers our arms and shoulders.</p>
                </div>

                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <h3>Working with bulk order</h3>
                    <p>A t-shirt is a type of fabric with short sleeves that covers our arms and shoulders.</p>
                </div>
            </div>
        </div>
    </section>


    <!--------------Team-------------->
    <section id="team">
        <div class="container">
            <h1>Our Team</h1>
            <div class="row">
                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="img/dp.jpg" class="img-responsive">
                    </div>
                    <h2>Tufayel Ahmed</h2>
                    <h3>Co-Founder / CEO</h3>
                    <p>Team of creative individuals values all your feedbacks and takes them all into account and
                        constantly look for approaches to serve you better.</p>
                </div>

                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="img/dp.jpg" class="img-responsive">
                    </div>
                    <h2>Mohammed Tamim</h2>
                    <h3>Co-Founder / Treasurer</h3>
                    <p>Team of creative individuals values all your feedbacks and takes them all into account and
                        constantly look for approaches to serve you better.</p>
                </div>

                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="img/dp.jpg" class="img-responsive">
                    </div>
                    <h2>Muhaimin Nafim</h2>
                    <h3>Co-Founder / Designer</h3>
                    <p>Team of creative individuals values all your feedbacks and takes them all into account and
                        constantly look for approaches to serve you better.</p>
                </div>

                <div class="col-md-3 profile-pic text-center">
                    <div class="img-box">
                        <img src="img/dp.jpg" class="img-responsive">
                    </div>
                    <h2>Iftekher Ifat</h2>
                    <h3>Co-Founder / Webmaster</h3>
                    <p>Team of creative individuals values all your feedbacks and takes them all into account and
                        constantly look for approaches to serve you better.</p>
                </div>
            </div>
        </div>
    </section>


    <!--------------contact-------------->
    <section id="contact">
        <div class="container">
            <h1>Contact with us</h1>
            <div class="row">
                <div class="col-md-6">
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Your Number">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your E-mail">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" placeholder="Your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>

                <div class="col-md-6 contact-info">
                    <div class="follow">
                        <strong>Shop At: </strong><a href="https://hilorang.com/">HILORANG</a>
                    </div>
                    <div class="follow">
                        <strong>Phone: </strong>+8801xxxxxxxxx
                    </div>
                    <div class="follow">
                        <strong>E-mail: </strong>hilorangbd@gmail.com
                    </div>



                </div>
            </div>
        </div>
    </section>




</body>

</html>