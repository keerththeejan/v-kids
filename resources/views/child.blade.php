<!DOCTYPE html>
<html lang="en">

<head>
    <title>V united care for kids</title>
    <link rel="shortcut icon" href="public/assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="public/assets/images/fav.jpg">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/all.min.css">
    <link rel="stylesheet" href="public/assets/css/animate.css">
    <link rel="stylesheet" href="public/assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="public/assets/css/style.css" />
    @include('script')
</head>

<body>
    <header class="continer-fluid ">
        <div class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="ulleft">
                            <li>
                                <i class="far fa-envelope"></i>
                                info@vcarekids.org
                                <span>|</span>
                            </li>
                            <li>
                                <i class="fas fa-phone-volume"></i>
                                +1-416-644-1113
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 folouws">

                        <ul class="ulright">
                            <li> <small>Follow Us </small>:</li>
                            <li>
                                <a href="https://www.facebook.com/vcarekids"> <i
                                        class="fab fa-facebook-square"></i></i></a>
                            </li>
                            <li>
                                <i class="fab fa-twitter-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-instagram"></i>
                            </li>
                            <li>
                                <i class="fab fa-linkedin"></i>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-lg-4 col-md-12 logo">
                        <a href="/">
                            <img src="assets/images/logo.jpg" alt="" width="20%"><span
                                style="padding-left: 10px; font-size: 20px;"> <b>Vanni Changam</b> </span>
                            <a data-toggle="collapse" data-target="#menu" href="#menu"><i
                                    class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                        </a>

                    </div>
                    <div id="menu" class="col-lg-8 col-md-12 d-none d-lg-block nav-col">

                    </div>
                </div>
            </div>
        </div>
    </header>
    <br>
    <div class="container">
        <section class="section">
            @foreach ($students->chunk(3) as $chunk)
                <div class="row">
                    @foreach ($chunk as $student)
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $student->fullname }}</h6>
                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($student->image); ?>"
                                        style="height:100%">
                                </div>
                                <div class="card-footer">
                                    <a href="studmsg{{ $student->id }}" class="btn btn-sm btn-primary" style="width: 100%;">Donate</a>
                                </div>
                            </div>
                        </div>

                        <!-- Donate Modal -->
                          @include('donatestatus')
                    @endforeach
                </div>
            @endforeach


        </section>
        
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Smart Eye is a leading provider of information technology, consulting, and business process
                        services. Our dedicated employees offer strategic insights, technological expertise and industry
                        experience.
                    </p>
                    <p>We focus on technologies that promise to reduce costs, streamline processes and speed
                        time-to-market, Backed by our strong quality processes and rich experience managing global...
                    </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#/about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i>
                        </li>
                        <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i>
                        </li>
                        <li><a ui-sref="gallery" href="#/gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#/contact">Contact us</a><i class="fa fa-angle-right"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">

                        Phone: +1-416-644-1113<br>
                        Email: <a href="mailto:info@anybiz.com" class="">info@vcarekids.org</a><br>
                        Web: <a href="smart-eye.html" class="">vcarekids.org</a>
                    </address>

                </div>
            </div>


            <div class="nav-box row clearfix">
                <div class="inner col-md-9 clearfix">
                    <ul class="footer-nav clearfix">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Servies</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>


                </div>
                <div class="donate-link col-md-3"><a href="donate.html" class="btn btn-primary "><span
                            class="btn-title">Donate Now</span></a></div>
            </div>

        </div>


    </footer>
    <script src="public/adminpanel/js/app.min.js"></script>
    <script src="public/adminpanel/js/scripts.js"></script>
    <script src="public/adminpanel/js/custom.js"></script>
</body>

</html>
