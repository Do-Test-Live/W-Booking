<?php
require_once('includes/dbcontroller.php');
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="fonts/linearicons/style.css">

    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

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

    <style>
        .form-home {
            background-color: white;
            padding-left: 5px;
            padding-right: 5px;
            height: 39px;
        }

        .form-home:focus {
            background-color: white;
            padding-left: 5px;
            padding-right: 5px;
            height: 39px;
        }
    </style>

    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <li class="current has-children">
                <a href="Home">
                    Home
                </a>
            </li>
        </ul>
        <div class="action align-items-center">
            <a href="Home" class="au-btn au-btn--hover has-bd">Booking now</a>
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

                    </div>
                </div>
            </div>
        </div>
        <nav id="main-nav">
            <ul>
                <li class="current">
                    <a href="Home" target="_blank">Home</a>
                </li>
            </ul>
        </nav>
    </nav>
</header>

<main>

    <div class="rev_slider_wrapper">
        <div id="rev_slider_3" class="rev_slider" data-version="5.4.5">
            <ul>
                <li data-transition="">
                    <img src="images/slideshow-4.jpg" class="rev-slidebg" alt="">
                    <div class="tp-caption tp-resizeme caption-4"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-fontsize="['67', '67', '67', '67', '67']"
                         data-voffset="['-42','12', '26', '-18', '-28']" data-lineheight="inherit" data-color="#fff">
                        Restaurant
                    </div>
                    <div class="tp-caption tp-resizeme caption-5"
                         data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-fontsize="['27', '27', '27', '27', '45']"
                         data-voffset="['54','108', '122', '78', '68']" data-lineheight="inherit" data-color="#ffcc66">
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                    </div>
                    <div class="tp-caption tp-resizeme caption-form"
                         data-frames='[{"delay":1000,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="bottom" data-voffset="['153','93', '73', '78', '73']"
                         data-lineheight="inherit" data-width="['991', '991', '891', '991', '991']"
                         data-visibility='["on", "off", "off", "off", "off"]'>
                        <form action="Reservation" method="get">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-holder">
                                        <label class="text-white">Seat(s)</label>
                                        <select class="form-control form-home" name="seat_number" required>
                                            <?php
                                            for ($i = 1; $i < 21; $i++) {
                                                ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i . ' Seat(s)' ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <span class="lnr lnr-chevron-down" style="padding-right: 5px"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-holder">
                                        <label class="text-white">Date</label>
                                        <input type="text" class="form-control form-home" data-language='en'
                                               data-date-format="dd - mm - yyyy" placeholder="Today" name="date"
                                               min="<?php echo date("Y-m-d"); ?>" onfocus="(this.type = 'date')" id="date-1" required/>

                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-holder">
                                        <label class="text-white">Product</label>
                                        <select class="form-control form-home" name="food" id="food_name-1"
                                                onchange="setFoodPrice(this.value,'1');" required>
                                            <option value="">Select Product</option>
                                            <?php
                                            $order_data = $db_handle->runQuery("SELECT * FROM `tblproduct`");
                                            for ($i = 0; $i < count($order_data); $i++) {
                                                ?>
                                                <option value="<?php echo $order_data[$i]['id']; ?>"><?php echo $order_data[$i]['name']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <span class="lnr lnr-chevron-down" style="padding-right: 5px"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-holder">
                                        <label class="text-white">Time and Price</label>
                                        <select class="form-control form-home" name="price" id="food_price-1" required>
                                            <option value=""></option>
                                        </select>
                                        <span class="lnr lnr-chevron-down" style="padding-right: 5px"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button class="au-btn tp-resizeme"
                                                data-fontsize="['18', '18', '18', '18', '18']"
                                                name="submit" style="background-color: #cca97b">
                                            Continue
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tp-caption tp-resizeme caption-pointer"
                         data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="left" data-y="middle" data-fontsize="['25', '25', '25', '30', '50']"
                         data-hoffset="['80','40', '40', '40', '20']" data-lineheight="inherit" data-color="#fff"
                         data-visibility='["on", "on", "on", "on", "off"]' data-actions='[{
								"event": "click",
								"action": "jumptoslide",
								"slide": "previous",
								"delay": "0"
							}]'>
                        <span class="lnr lnr-arrow-left"></span>
                    </div>
                    <div class="tp-caption tp-resizeme caption-pointer"
                         data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="right" data-y="middle" data-fontsize="['25', '25', '25', '30', '50']"
                         data-hoffset="['80','40', '40', '40', '20']" data-lineheight="inherit" data-color="#fff"
                         data-visibility='["on", "on", "on", "on", "off"]' data-actions='[{
								"event": "click",
								"action": "jumptoslide",
								"slide": "next",
								"delay": "0"
							}]'>
                        <span class="lnr lnr-arrow-right"></span>
                    </div>
                </li>
                <li data-transition="">
                    <img src="images/slideshow-4.jpg" class="rev-slidebg" alt="">
                    <div class="tp-caption tp-resizeme caption-4"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-fontsize="['67', '67', '67', '67', '67']"
                         data-voffset="['-42','12', '26', '-18', '-28']" data-lineheight="inherit" data-color="#fff">
                        Restaurant
                    </div>
                    <div class="tp-caption tp-resizeme caption-5"
                         data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-fontsize="['27', '27', '27', '27', '45']"
                         data-voffset="['54','108', '122', '78', '68']" data-lineheight="inherit" data-color="#ffcc66">
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                    </div>
                    <div class="tp-caption tp-resizeme caption-form"
                         data-frames='[{"delay":1000,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="bottom" data-voffset="['153','93', '73', '78', '73']"
                         data-lineheight="inherit" data-width="['991', '991', '891', '991', '991']"
                         data-visibility='["on", "off", "off", "off", "off"]'>
                        <form action="Reservation" method="get">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-holder">
                                        <label class="text-white">Seat(s)</label>
                                        <select class="form-control form-home" name="seat_number" required>
                                            <?php
                                            for ($i = 1; $i < 21; $i++) {
                                                ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i . ' Seat(s)' ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <span class="lnr lnr-chevron-down" style="padding-right: 5px"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-holder">
                                        <label class="text-white">Date</label>
                                        <input type="text" class="form-control form-home" data-language='en'
                                               data-date-format="dd - mm - yyyy" placeholder="Today" name="date"
                                               min="<?php echo date("Y-m-d"); ?>" onfocus="(this.type = 'date')" id="date-2" required/>

                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-holder">
                                        <label class="text-white">Product</label>
                                        <select class="form-control form-home" name="food" id="food_name-2"
                                                onchange="setFoodPrice(this.value,'2');" required>
                                            <option value="">Select Product</option>
                                            <?php
                                            $order_data = $db_handle->runQuery("SELECT * FROM `tblproduct`");
                                            for ($i = 0; $i < count($order_data); $i++) {
                                                ?>
                                                <option value="<?php echo $order_data[$i]['id']; ?>"><?php echo $order_data[$i]['name']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <span class="lnr lnr-chevron-down" style="padding-right: 5px"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-holder">
                                        <label class="text-white">Time and Price</label>
                                        <select class="form-control form-home" name="price" id="food_price-2" required>
                                            <option value=""></option>
                                        </select>
                                        <span class="lnr lnr-chevron-down" style="padding-right: 5px"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button class="au-btn tp-resizeme"
                                                data-fontsize="['18', '18', '18', '18', '18']"
                                                name="submit" style="background-color: #cca97b">
                                            Continue
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tp-caption tp-resizeme caption-pointer"
                         data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="left" data-y="middle" data-fontsize="['25', '25', '25', '30', '50']"
                         data-hoffset="['80','40', '40', '40', '20']" data-lineheight="inherit" data-color="#fff"
                         data-visibility='["on", "on", "on", "on", "off"]' data-actions='[{
								"event": "click",
								"action": "jumptoslide",
								"slide": "previous",
								"delay": "0"
							}]'>
                        <span class="lnr lnr-arrow-left"></span>
                    </div>
                    <div class="tp-caption tp-resizeme caption-pointer"
                         data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="right" data-y="middle" data-fontsize="['25', '25', '25', '30', '50']"
                         data-hoffset="['80','40', '40', '40', '20']" data-lineheight="inherit" data-color="#fff"
                         data-visibility='["on", "on", "on", "on", "off"]' data-actions='[{
								"event": "click",
								"action": "jumptoslide",
								"slide": "next",
								"delay": "0"
							}]'>
                        <span class="lnr lnr-arrow-right"></span>
                    </div>
                </li>
                <li data-transition="">
                    <img src="images/slideshow-4.jpg" class="rev-slidebg" alt="">
                    <div class="tp-caption tp-resizeme caption-4"
                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-fontsize="['67', '67', '67', '67', '67']"
                         data-voffset="['-42','12', '26', '-18', '-28']" data-lineheight="inherit" data-color="#fff">
                        Restaurant
                    </div>
                    <div class="tp-caption tp-resizeme caption-5"
                         data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-fontsize="['27', '27', '27', '27', '45']"
                         data-voffset="['54','108', '122', '78', '68']" data-lineheight="inherit" data-color="#ffcc66">
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                    </div>
                    <div class="tp-caption tp-resizeme caption-form"
                         data-frames='[{"delay":1000,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="bottom" data-voffset="['153','93', '73', '78', '73']"
                         data-lineheight="inherit" data-width="['991', '991', '891', '991', '991']"
                         data-visibility='["on", "off", "off", "off", "off"]'>

                        <form action="Reservation" method="get">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-holder">
                                        <label class="text-white">Seat(s)</label>
                                        <select class="form-control form-home" name="seat_number" required>
                                            <?php
                                            for ($i = 1; $i < 21; $i++) {
                                                ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i . ' Seat(s)' ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <span class="lnr lnr-chevron-down" style="padding-right: 5px"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-holder">
                                        <label class="text-white">Date</label>
                                        <input type="text" class="form-control form-home" data-language='en'
                                               data-date-format="dd - mm - yyyy" placeholder="Today" name="date"
                                               min="<?php echo date("Y-m-d"); ?>" onfocus="(this.type = 'date')" id="date-3" required/>

                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-holder">
                                        <label class="text-white">Product</label>
                                        <select class="form-control form-home" name="food" id="food_name-3"
                                                onchange="setFoodPrice(this.value,'3');" required>
                                            <option value="">Select Product</option>
                                            <?php
                                            $order_data = $db_handle->runQuery("SELECT * FROM `tblproduct`");
                                            for ($i = 0; $i < count($order_data); $i++) {
                                                ?>
                                                <option value="<?php echo $order_data[$i]['id']; ?>"><?php echo $order_data[$i]['name']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <span class="lnr lnr-chevron-down" style="padding-right: 5px"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-holder">
                                        <label class="text-white">Time and Price</label>
                                        <select class="form-control form-home" name="price" id="food_price-3" required>
                                            <option value=""></option>
                                        </select>
                                        <span class="lnr lnr-chevron-down" style="padding-right: 5px"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button class="au-btn tp-resizeme"
                                                data-fontsize="['18', '18', '18', '18', '18']"
                                                name="submit" style="background-color: #cca97b">
                                            Continue
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tp-caption tp-resizeme caption-pointer"
                         data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="left" data-y="middle" data-fontsize="['25', '25', '25', '30', '50']"
                         data-hoffset="['80','40', '40', '40', '20']" data-lineheight="inherit" data-color="#fff"
                         data-visibility='["on", "on", "on", "on", "off"]' data-actions='[{
								"event": "click",
								"action": "jumptoslide",
								"slide": "previous",
								"delay": "0"
							}]'>
                        <span class="lnr lnr-arrow-left"></span>
                    </div>
                    <div class="tp-caption tp-resizeme caption-pointer"
                         data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="right" data-y="middle" data-fontsize="['25', '25', '25', '30', '50']"
                         data-hoffset="['80','40', '40', '40', '20']" data-lineheight="inherit" data-color="#fff"
                         data-visibility='["on", "on", "on", "on", "off"]' data-actions='[{
								"event": "click",
								"action": "jumptoslide",
								"slide": "next",
								"delay": "0"
							}]'>
                        <span class="lnr lnr-arrow-right"></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="slideshow-form on-mobile">
        <div class="container">
            <form method="get" action="Reservation">
                <form action="Reservation" method="get">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-holder">
                                <label class="text-white">Seat(s)</label>
                                <select class="form-control form-home" name="seat_number" required>
                                    <?php
                                    for ($i = 1; $i < 21; $i++) {
                                        ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i . ' Seat(s)' ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <span class="lnr lnr-chevron-down" style="padding-right: 5px"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-holder">
                                <label class="text-white">Date</label>
                                <input type="text" class="form-control form-home" data-language='en'
                                       data-date-format="dd - mm - yyyy" placeholder="Today" name="date"
                                       min="<?php echo date("Y-m-d"); ?>" onfocus="(this.type = 'date')" id="date-4" required/>

                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-holder">
                                <label class="text-white">Product</label>
                                <select class="form-control form-home" name="food" id="food_name-4"
                                        onchange="setFoodPrice(this.value,'4');" required>
                                    <option value="">Select Product</option>
                                    <?php
                                    $order_data = $db_handle->runQuery("SELECT * FROM `tblproduct`");
                                    for ($i = 0; $i < count($order_data); $i++) {
                                        ?>
                                        <option value="<?php echo $order_data[$i]['id']; ?>"><?php echo $order_data[$i]['name']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <span class="lnr lnr-chevron-down" style="padding-right: 5px"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-holder">
                                <label class="text-white">Time and Price</label>
                                <select class="form-control form-home" name="price" id="food_price-4" required>
                                    <option value=""></option>
                                </select>
                                <span class="lnr lnr-chevron-down" style="padding-right: 5px"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center align-items-center">
                                <button class="au-btn tp-resizeme"
                                        data-fontsize="['18', '18', '18', '18', '18']"
                                        name="submit" style="background-color: #cca97b">
                                    Continue
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </form>
        </div>
    </div>
</main>

<footer>
    <div class="ft-bot">
        <div class="container">
            Copyright 2022 All Right Reserved By Restaurants
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

<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="vendor/hcmobilenav/hc-mobile-nav.js"></script>

<script src="vendor/jquery-ui/jquery-ui.min.js"></script>

<script src="vendor/date-picker/datepicker.js"></script>
<script src="vendor/date-picker/datepicker.en.js"></script>

<script src="vendor/jquery-timepicker-master/jquery.timepicker.min.js"></script>
<script src="js/main.min.js"></script>

<script>
    function setFoodPrice(value, id) {
        let date = $('#date-' + id).val();

        $.ajax({
            type: 'post',
            url: 'getProductPriceTime.php',
            data: {
                product_id: value, date: date
            },
            success: function (data) {
                $('#food_price-' + id).html(data);
            }
        });
    }
</script>
</body>
</html>
