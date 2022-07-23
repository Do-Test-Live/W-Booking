<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Reservation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="fonts/linearicons/style.css">

    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="fonts/font-awesome-5/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="vendor/date-picker/datepicker.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/revolution-slider/css/layers.css">
    <link rel="stylesheet" type="text/css" href="vendor/revolution-slider/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="vendor/revolution-slider/css/settings.css">

    <link rel="stylesheet" href="vendor/hcmobilenav/demo.css">

    <link rel="stylesheet" href="vendor/jquery-timepicker-master/jquery.timepicker.css">

    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="preload">

<div class="images-preloader">
    <div id="preloader" class="rectangle-bounce">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<header>

    <nav class="navbar-desktop">
        <div class="left">
            <a href="Home" class="logo">
                <img src="images/logo.png" alt="Royate">
            </a>
        </div>
        <ul>
            <li class="has-children">
                <a href="Home">
                    Home
                </a>
            </li>
        </ul>
        <div class="right">
            <div class="action">
                <div class="notify">
                    <div class="action align-items-center">
                        <a href="Home" class="au-btn au-btn--hover has-bd">Booking now</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar-mobile">
        <div class="container">
            <div class="heading">
                <div class="left">
                    <a href="#" class="navbar-mobile__toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <a href="Home" class="logo">
                    <img src="images/logo.png" alt="Royate">
                </a>
                <div class="right">
                    <div class="action">
                        <div class="notify">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="main-nav">
            <ul>
                <li>
                    <a href="Home" target="_blank">Home</a>
                </li>
            </ul>
        </nav>
    </nav>
</header>

<main>

    <section class="page-info set-bg" data-image-src="images/page-info-bg-2.jpg">
        <div class="section-header">
            <h1 class="text-white">Reservation</h1>
            <span>~ For the best location ~</span>
        </div>
    </section>

    <section class="section-primary section-form pb-120">
        <div class="container">
            <div class="section-header">
                <h2>Book a table</h2>
                <span>~ Check out our place ~</span>
            </div>
            <div class="row mb-3">

                <div class="col-md-4">
                    <h5>
                        <?php
                        if (!isset($_GET['date'])) {
                            header('location:Home');
                        }

                        if (isset($_GET['date'])) {
                            echo $_GET['date'];
                        }
                        ?>
                    </h5>
                    <p>Date</p>
                </div>
                <div class="col-md-4">
                    <h5>
                        <?php
                        if (isset($_GET['time'])) {
                            echo $_GET['time'];
                        }
                        ?>
                    </h5>
                    <p>Time</p>
                </div>
                <div class="col-md-4">
                    <h5>
                        <?php
                        if (isset($_GET['seat_number'])) {
                            echo $_GET['seat_number'];
                        }
                        ?>
                    </h5>
                    <p>Seat(s)</p>
                </div>
            </div>
            <form action="Email" method="post">
                <input type="hidden" value="<?php echo $_GET['date']; ?>" name="date"/>
                <input type="hidden" value="<?php echo $_GET['time']; ?>" name="time"/>
                <input type="hidden" value="<?php echo $_GET['seat_number']; ?>" name="seat_number"/>
                <h3>Customer Information</h3>
                <div class="form-inner">
                    <div class="col-12 mt-3">
                        <label>Dinner Name</label>
                        <input class="form-control" type="text" name="name"/>
                    </div>
                    <div class="col-12 mt-3">
                        <label>Phone Number</label>
                        <input class="form-control" type="text" name="number"/>
                    </div>
                    <div class="col-12 mt-3">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email"/>
                    </div>
                    <div class="col-12 mt-3">
                        <label>Special Occasion</label>
                        <input class="form-control" type="text" name="occasion"/>
                    </div>
                    <div class="col-12 mt-3">
                        <label>Food Allergies</label>
                        <input class="form-control" type="text" name="alergies"/>
                    </div>
                </div>
                <div class="btn-holder">
                    <button class="au-btn round au-btn--hover has-bg" name="submit">Book now</button>
                </div>
            </form>
        </div>
    </section>
</main>

<footer>
    <div class="ft-bot">
        <div class="container">
            Copyright 2022 All Right Reserved By Food Island
        </div>
    </div>
</footer>

<div class="click-to-top">
    <span class="lnr lnr-arrow-up"></span>
</div>

<script src="js/jquery-3.3.1.min.js"></script>

<script src="vendor/bootstrap/bootstrap.min.js"></script>

<script src="vendor/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="vendor/revolution-slider/js/jquery.themepunch.tools.min.js"></script>

<script src="vendor/revolution-slider/js/revolution.extension.actions.min.js"></script>
<script src="vendor/revolution-slider/js/revolution.extension.carousel.min.js"></script>
<script src="vendor/revolution-slider/js/revolution.extension.kenburn.min.js"></script>
<script src="vendor/revolution-slider/js/revolution.extension.layeranimation.min.js"></script>
<script src="vendor/revolution-slider/js/revolution.extension.migration.min.js"></script>
<script src="vendor/revolution-slider/js/revolution.extension.navigation.min.js"></script>
<script src="vendor/revolution-slider/js/revolution.extension.parallax.min.js"></script>
<script src="vendor/revolution-slider/js/revolution.extension.slideanims.min.js"></script>
<script src="vendor/revolution-slider/js/revolution.extension.video.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEmXgQ65zpsjsEAfNPP9mBAz-5zjnIZBw"></script>
<script src="js/theme-map.js"></script>

<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="vendor/hcmobilenav/hc-mobile-nav.js"></script>

<script src="vendor/jquery-ui/jquery-ui.min.js"></script>

<script src="vendor/date-picker/datepicker.js"></script>
<script src="vendor/date-picker/datepicker.en.js"></script>

<script src="vendor/jquery-timepicker-master/jquery.timepicker.min.js"></script>
<script src="js/main.min.js"></script>
</body>
</html>
