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
            <a href="index.php" class="logo">
                <img src="images/logo.png" alt="Royate">
            </a>
        </div>
        <ul>
            <li class="current has-children">
                <a href="index.php">
                    Home
                </a>
            </li>
        </ul>
        <div class="action align-items-center">
            <a href="index.php" class="au-btn au-btn--hover has-bd">Booking now</a>
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
                <a href="index.php" class="logo">
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
                    <a href="index.php" target="_blank">Home</a>
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
                    <div class="tp-caption tp-resizeme caption-1"
                         data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-fontsize="['33', '33', '33', '33', '33']"
                         data-voffset="['-164','-110', '-96', '-140', '-150']"
                         data-hoffset="['-127','-127', '-120', '-127', '-127']" data-lineheight="inherit"
                         data-color="#fff">
                        Since
                    </div>
                    <div class="tp-caption tp-resizeme caption-2"
                         data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-voffset="['-165', '-111', '-97', '-141', '-151']"
                         data-width="['auto']" data-height="['auto']" data-type="image">
                        <img src="images/crown-symbol.png" alt=""
                             data-ww="['103px', '103px', '103px', '103px', '103px']"
                             data-hh="['80px', '80px', '80px', '80px', '80px']">
                    </div>
                    <div class="tp-caption tp-resizeme caption-3"
                         data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-fontsize="['33', '33', '33', '33', '33']"
                         data-voffset="['-164','-110', '-96', '-140', '-150']"
                         data-hoffset="['120','120', '110', '120', '120']" data-lineheight="inherit" data-color="#fff">
                        1986
                    </div>
                    <div class="tp-caption tp-resizeme caption-4"
                         data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-fontsize="['67', '67', '67', '67', '67']"
                         data-voffset="['-42','12', '26', '-18', '-28']" data-lineheight="inherit" data-color="#fff">
                        Restaurant
                    </div>
                    <div class="tp-caption tp-resizeme caption-5"
                         data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"x:{-250,250};y:{-150,150};rX:{-90,90};rY:{-90,90};rZ:{-360,360};sX:0;sY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-fontsize="['27', '27', '27', '27', '45']"
                         data-voffset="['54','108', '122', '78', '68']" data-lineheight="inherit" data-color="#ffcc66">
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                        <i class="zmdi zmdi-star"></i>
                    </div>
                    <div class="tp-caption tp-resizeme caption-6"
                         data-frames='[{"delay":3200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-voffset="['98', '152', '166', '122', '112']"
                         data-width="['auto']" data-height="['auto']" data-type="image">
                        <img src="images/assure-food-quality.png" alt=""
                             data-ww="['300px', '300px', '300px', '300px', '300px']"
                             data-hh="['45px', '45px', '45px', '45px', '45px']">
                    </div>
                    <div class="tp-caption tp-resizeme caption-form"
                         data-frames='[{"delay":1000,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="bottom" data-voffset="['143','93', '73', '78', '73']"
                         data-lineheight="inherit" data-width="['991', '991', '891', '991', '991']"
                         data-visibility='["on", "off", "off", "off", "off"]'>

                        <div class="slideshow-form">
                            <form method="get" action="Reservation">
                                <div class="inner">
                                    <div class="form-holder">
                                        <select class="form-control" name="seat_number">
                                            <?php
                                            for ($i = 1; $i < 21; $i++) {
                                                ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i.' Seat(s)' ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <span class="lnr lnr-chevron-down"></span>
                                    </div>
                                    <div class="form-holder">
                                        <input type="text" class="form-control datepicker-here" data-language='en'
                                               data-date-format="dd - mm - yyyy" placeholder="Date" name="date">
                                        <span class="lnr lnr-calendar-full big"></span>
                                    </div>
                                    <div class="form-holder">
                                        <input type="text" class="form-control time-picker" placeholder="Time" name="time">
                                        <span class="lnr lnr-clock big"></span>
                                    </div>
                                    <button class="au-btn tp-resizeme" data-fontsize="['18', '18', '18', '18', '18']" name="submit">
                                        Continue
                                    </button>
                                </div>
                            </form>
                        </div>
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
                    <div class="tp-caption tp-resizeme caption-3"
                         data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-voffset="['-156', '-102', '-88', '-131', '-141']"
                         data-width="['auto']" data-height="['auto']" data-type="image">
                        <img src="images/restaurant-name.png" alt=""
                             data-ww="['419px', '419px', '419px', '419px', '419px']"
                             data-hh="['88px', '88px', '88px', '88px', '88px']">
                    </div>
                    <div class="tp-caption tp-resizeme caption-2"
                         data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-fontsize="['44', '44', '44', '44', '44']"
                         data-voffset="['-4', '50', '64', '21', '11']"
                         data-hoffset="['-167','-167', '-167', '-167', '-167']" data-lineheight="inherit"
                         data-color="#fff">
                        estb
                    </div>
                    <div class="tp-caption tp-resizeme caption-3"
                         data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-voffset="['-61', '-7', '7', '-36', '-46']"
                         data-width="['auto']" data-height="['auto']" data-type="image">
                        <img src="images/fork.png" alt="" data-ww="['151px', '151px', '151px', '151px', '151px']"
                             data-hh="['142px', '142px', '142px', '142px', '142px']">
                    </div>
                    <div class="tp-caption tp-resizeme caption-4"
                         data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-fontsize="['44', '44', '44', '44', '44']"
                         data-voffset="['-4','50', '64', '21', '11']" data-hoffset="['153','153', '153', '153', '153']"
                         data-lineheight="inherit" data-color="#fff">
                        1974
                    </div>
                    <div class="tp-caption tp-resizeme caption-5"
                         data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-voffset="['78','132', '146', '103', '93']"
                         data-hoffset="['-6','-6', '-6', '-6', '-6']" data-width="['auto']" data-height="['auto']"
                         data-type="image">
                        <img src="images/the-best-food.png" alt=""
                             data-ww="['411px', '411px', '411px', '411px', '411px']"
                             data-hh="['69px', '69px', '69px', '69px', '69px']">
                    </div>
                    <div class="tp-caption tp-resizeme caption-form"
                         data-frames='[{"delay":1000,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="bottom" data-voffset="['143','93', '63', '123', '133']"
                         data-lineheight="inherit" data-width="['991', '991', '991', '991', '991']"
                         data-visibility='["on", "off", "off", "off", "off"]'>

                        <div class="slideshow-form">
                            <form method="get" action="Reservation">
                                <div class="inner">
                                    <div class="form-holder">
                                        <select class="form-control" name="seat_number">
                                            <?php
                                            for ($i = 1; $i < 21; $i++) {
                                                ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i.' Seat(s)' ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <span class="lnr lnr-chevron-down"></span>
                                    </div>
                                    <div class="form-holder">
                                        <input type="text" class="form-control datepicker-here" data-language='en'
                                               data-date-format="dd - mm - yyyy" placeholder="Date" name="date">
                                        <span class="lnr lnr-calendar-full big"></span>
                                    </div>
                                    <div class="form-holder">
                                        <input type="text" class="form-control time-picker" placeholder="Time" name="time">
                                        <span class="lnr lnr-clock big"></span>
                                    </div>
                                    <button class="au-btn tp-resizeme" data-fontsize="['18', '18', '18', '18', '18']" name="submit">
                                        Continue
                                    </button>
                                </div>
                            </form>
                        </div>
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
                    <div class="tp-caption tp-resizeme caption-1"
                         data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-fontsize="['34', '34', '34', '34', '34']"
                         data-voffset="['-140','-86', '-72', '-115', '-125']" data-lineheight="inherit"
                         data-color="#fff">
                        <i class="zmdi zmdi-star"></i>
                        <span>Premium</span>
                        <i class="zmdi zmdi-star"></i>
                    </div>
                    <div class="tp-caption tp-resizeme caption-2"
                         data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-fontsize="['70', '70', '70', '70', '70']"
                         data-voffset="['-56','-2', '12', '-31', '-41']" data-lineheight="inherit" data-color="#fff">
                        salmon trout
                    </div>
                    <div class="tp-caption tp-resizeme caption-3"
                         data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="middle" data-voffset="['39','93', '107', '64', '54']"
                         data-width="['auto']" data-height="['auto']" data-type="image">
                        <img src="images/special-menu.png" alt=""
                             data-ww="['365px', '365px', '365px', '365px', '365px']"
                             data-hh="['55px', '55px', '55px', '55px', '55px']">
                    </div>
                    <div class="tp-caption tp-resizeme caption-form"
                         data-frames='[{"delay":1000,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="center" data-y="bottom" data-voffset="['143','93', '63', '123', '133']"
                         data-lineheight="inherit" data-width="['991', '991', '991', '991', '991']"
                         data-visibility='["on", "off", "off", "off", "off"]'>

                        <div class="slideshow-form">
                            <form method="get" action="Reservation">
                                <div class="inner">
                                    <div class="form-holder">
                                        <select class="form-control" name="seat_number">
                                            <?php
                                            for ($i = 1; $i < 21; $i++) {
                                                ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i.' Seat(s)' ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <span class="lnr lnr-chevron-down"></span>
                                    </div>
                                    <div class="form-holder">
                                        <input type="text" class="form-control datepicker-here" data-language='en'
                                               data-date-format="dd - mm - yyyy" placeholder="Date" name="date">
                                        <span class="lnr lnr-calendar-full big"></span>
                                    </div>
                                    <div class="form-holder">
                                        <input type="text" class="form-control time-picker" placeholder="Time" name="time">
                                        <span class="lnr lnr-clock big"></span>
                                    </div>
                                    <button class="au-btn tp-resizeme" data-fontsize="['18', '18', '18', '18', '18']" name="submit">
                                        Continue
                                    </button>
                                </div>
                            </form>
                        </div>
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
                <div class="inner">
                    <div class="form-holder">
                        <select class="form-control" name="seat_number">
                            <?php
                            for ($i = 1; $i < 21; $i++) {
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i.' Seat(s)' ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <span class="lnr lnr-chevron-down"></span>
                    </div>
                    <div class="form-holder">
                        <input type="text" class="form-control datepicker-here" data-language='en'
                               data-date-format="dd - mm - yyyy" placeholder="Date" name="date">
                        <span class="lnr lnr-calendar-full big"></span>
                    </div>
                    <div class="form-holder">
                        <input type="text" class="form-control time-picker" placeholder="Time" name="time">
                        <span class="lnr lnr-clock big"></span>
                    </div>
                    <button class="au-btn tp-resizeme" data-fontsize="['18', '18', '18', '18', '18']" name="submit">Book now</button>
                </div>
            </form>
        </div>
    </div>
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

<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="vendor/hcmobilenav/hc-mobile-nav.js"></script>

<script src="vendor/jquery-ui/jquery-ui.min.js"></script>

<script src="vendor/date-picker/datepicker.js"></script>
<script src="vendor/date-picker/datepicker.en.js"></script>

<script src="vendor/jquery-timepicker-master/jquery.timepicker.min.js"></script>
<script src="js/main.min.js"></script>
</body>
</html>
