<?php
session_start();
if(isset($_SESSION['gotopayment']))
    header("Location:payment.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>GLAMOUR - One page HTML Responsive</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>
    <script src="js/all.js"></script>


</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <h2 class="block-title"> GLAMOUR</h2>

                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="#about">About us</a></li>
<!--                                    <li><a href="#menu">Shop</a></li>-->
                                    <li><a href="#our_team">Designs</a></li>
                                    <li><a href="#gallery">Gallery</a></li>
                                    <li><a href="#blog">Shop</a></li>
                                    <li><a href="#pricing">Store Location</a></li>
                                    <li><a href="#footer">Contact us</a></li>
                                    <li><a href="index.php" >SignIn</a></li>
                                    <li><a href="admin_login.php" > <h1> <span class="price" style="color:white"><i class="fa fa-user"></i> </span></h1></a></li>


<!--                                    <li></li><i class="fa fa-user" aria-hidden="true"></i></li>-->
                                </ul>

                            </div>

                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>

	<!-- end site-header -->

    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Be Exclusive, Be Devine <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Yourself" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>

                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> About Us </h2>

                        <p> Glamour is one of the most renowned designer boutiques in Mangalore.
                        Based in Mehrauli and Qutub.Several established names in the world of fashion have found home in the early
                        stages of their career at Glamour.This destination boutique is recognized for high quality Indian and trousseau wear. </p>

                        <p> Being one of the earliest designer boutiques in town, Glamour grew exponentially in a quick span of time to become the most sought after luxury waer destination. All of our stors are identified by their divers collection of wedding and trousseau wear, a wide range of luxury jewellery,and make up products.
                            Our carefully curated merchandise is surely bound to bring the loyal and discerning customer back, time and time again.</p>

                        <p> We ship globally and accept payments through Paypal,PayU, Visa, MasterCard, and American Express credit/debit cards. For Indian customers, we have facility to pay via NetBanking/COD(at select locations) </p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="images/about_main.jpg" alt="About Main Image">
                            <img class="about-inset" src="images/about_main.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Signature Designs </h2>
                        <h5 class="title-caption text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia,nostrud exercitation ullamco. </h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            <div class="item item-type-zoom">

                                <div class="item-img">
                                    <img src="images/special1.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">

                                <div class="item-img">
                                    <img src="images/special2.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">

                                <div class="item-img">
                                    <img src="images/special3.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">

                                <div class="item-img">
                                    <img src="images/special4.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom">

                                <div class="item-img">
                                    <img src="images/special5.jpg" alt="sp-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->

    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xs-12 ">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Latest Designs
					</h2>
                        <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                    </div>
                    <div class="team-box">

                        <div class="row">

                            <div class="col-md-3 col-sm-5">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="images/staff-01.jpg" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>A Maroon Embroidered Velvet Bridal Lehenga FF4186</h3>
                                        <p>Lehenga Color _ Maroon Fabric _ Velvet Embellishment _ Embroidery Lehenga Border _ Maroon Lehenga Color _ Maroon Lehenga Fabric _ Velvet Lehenga Length _ 43 Inches Lehenga Style _ Flared Lehenga Work _ Sequins & Cu</p>
                                    </div>
                                </div>
                            </div>

                                <div class="col-md-3 col-sm-5">
                                    <div class="sf-team">
                                        <div class="thumb">
                                            <a href="#"><img src="images/staff-02.jpg" alt=""></a>
                                        </div>
                                        <div class="text-col">
                                            <h3>Peach Pitta Embroidered Silk Bridal Lehenga</h3>
                                            <p>$1150 · Lehenga Color : Peach Fabric : Silk Embellishment : Pitta work Lehenga Border : Gold & Peach Lehenga Color : Shaded Peach Lehenga Fabric : Silk Lehenga Length : Floor Length Lehenga Style : A-Line…</p>
                                        </div>
                                    </div>
                                </div>

                                    <div class="col-md-3 col-sm-5">
                                        <div class="sf-team">
                                            <div class="thumb">
                                                <a href="#"><img src="images/staff-03.jpg" alt=""></a>
                                            </div>
                                            <div class="text-col">
                                                <h3>John Doggett</h3>
                                                <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p>
                                            </div>
                                        </div>
                                    </div>


                                        <div class="col-md-3 col-sm-5">
                                            <div class="sf-team">
                                                <div class="thumb">
                                                    <a href="#"><img src="images/staff-04.jpg" alt=""></a>
                                                </div>
                                                <div class="text-col">
                                                    <h3>John Doggett</h3>
                                                    <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p>

                                                </div>
                                            </div>


                                        </div>
                        </div>
                    </div>
                    <!-- end team-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end team-main -->

    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Our Gallery
					</h2>
                        <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available </p>
                    </div>
                    <div class="gal-container clearfix">
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#1">
                                    <img src="images/gallery01.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery01.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 1 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#2">
                                    <img src="images/gallery02.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery02.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 2 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#3">
                                    <img src="images/gallery03.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery03.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 3 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#4">
                                    <img src="images/gallery04.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery04.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 4 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#5">
                                    <img src="images/gallery05.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery05.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 5 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#9">
                                    <img src="images/gallery06.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery06.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 6 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#10">
                                    <img src="images/gallery07.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery07.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 7 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#11">
                                    <img src="images/gallery08.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery08.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 8 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#12">
                                    <img src="images/gallery09.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery09.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 9 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#13">
                                    <img src="images/gallery10.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery10.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 10 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end gal-container -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end gallery-main -->

    <div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
					Shop
				</h2>
                    <div class="blog-box clearfix">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <a href="womans.php>"> <img src="images/womens.jpg" alt="" /></a>
                                        <div class="overlay">
                                            <a href="womans.php"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <p><span>2 NOVEMBER, 2019</span></p>
                                        <h2>Womens Collections</h2>
                                        <h1 style="color:#ff9f00">Glamour</h1>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="images/men.jpg" alt="" />
                                        <div class="overlay">
                                            <a href="mens.php"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <p><span>2 NOVEMBER, 2019</span></p>
                                        <h2>Mens Collections</h2>
                                        <h1 style="color:#ff9f00">Glamour</h1>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="images/jew.jpg" alt="" />
                                        <div class="overlay">
                                            <a href="jewellery.php"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <p><span>2 NOVEMBER, 2019</span></p>
                                        <h2>Jewellary Collections</h2>
                                        <h1 style="color:#ff9f00">Glamour</h1>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="images/beautiful.jpg" alt="" />
                                        <div class="overlay">
                                            <a href="beauty.php"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <p><span>2 NOVEMBER, 2019</span></p>
                                        <h2>Cosmetic Collections</h2>
                                        <h1 style="color:#ff9f00">Glamour</h1>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                    <!-- end blog-box -->


                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end blog-main -->

    <div id="pricing" class="pricing-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
						Store Location
					</h2>
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut orci varius, elementum lectus nec, aliquam lectus. Duis neque augue, maximus in sapien ut, porta pharetra odio.</p>-->
                </div>

                <div class="row">
                    <div class="column">
                        <h2 style="color:white"> BENGALURU</h2>
                        Evoluzione<br>
                        No. 14, Vittal Mallya Road
                        Embassy classic, ground floor
                        Bengaluru - 560001<br>
                        Ph: +918041121088<br>
                        Email: Glamour@evoluzionestyle.com
                    </div>
                    <div class="column">
                        <h2 style="color:white">  MUMBAI</h2>

                        Glamour Couture <br>Pvt.Ltd
                        Ador House.6K Dubash marg
                        Opp: Lion Gate, Kalaghoda
                        Mumbai - 400001<br>
                        Ph: +919082745249<br>
                        Email: mumbairetail@Glamour.com

                    </div>
                    <div class="column">
                        <h2 style="color:white">  NEW DELHI</h2>

                        Glamour Couture<br>
                        Kutub Serai No 6-8,
                        One Style Mile,
                        Kalka Das Marg
                        Mehrauli, Near Qutub Minar
                        New Delhi - 110030,<br>
                        Ph: +919810311155<br>
                        Email: delhiretail@Glamour.com

                    </div>
                </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

    <!-- end pricing-main -->



    <div id="footer" class="footer-main">
        <div class="footer-news pad-top-100 pad-bottom-70 parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="ft-title color-white text-center"> Ask Query</h2>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <form>
                            <input type="email" placeholder="Enter your e-mail id">
                            <a href="#" class="orange-btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
                        </form>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-news -->
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
<!--                                <img src="images/logo.png" alt="" />-->
                                <h2 class="block-title"> GLAMOUR</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h3>About Us</h3>
                                <p>Aenean commodo ligula eget dolor aenean massa. Cum sociis nat penatibu set magnis dis parturient montes.</p>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-b">
                                <h3>New Menu</h3>
                                <ul>
                                    <li><a href="womans.php">Woman Collections</a></li>
                                    <li><a href="mens.php">Men Collections</a></li>
                                    <li><a href="jewellery.php">Jewellery Collections </a></li>
                                    <li><a href="beauty.php">Beauty Collections</a></li>
                                </ul>
                            </div>
                            <!-- end footer-box-b -->
                        </div>

                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Contact Us</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>6 E Esplanade, St Albans VIC 3021, Australia</span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
									+91 80005 89080
								</span>
                                </p>
                                <p>
<!--                                    <i class="fa fa-envelope" aria-hidden="true"></i>-->
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span><a href="#">support@GLAMOUR.com</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Opening Hours</h3>

                                <ul>
                                    <li>
                                        <p>Monday - Thursday </p>
                                        <span> 11:00 AM - 9:00 PM</span>
                                    </li>
                                    <li>
                                        <p>Friday - Saturday </p>
                                        <span>  11:00 AM - 5:00 PM</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy; 2019 GLAMOUR is powered by <a href="#" target="_blank"></a> </h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <section id="color-panel" class="close-color-panel">
        <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
        <!-- Colors -->
        <div class="segment">
            <h4 class="gray2 normal no-padding">Color Scheme</h4>
            <a title="orange" class="switcher orange-bg"></a>
            <a title="strong-blue" class="switcher strong-blue-bg"></a>
            <a title="moderate-green" class="switcher moderate-green-bg"></a>
            <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
        </div>
    </section>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>