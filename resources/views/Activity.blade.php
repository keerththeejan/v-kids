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
                            <li> <small>Follow Us</small>:</li>
                            <li>
                                <a href="https://www.facebook.com/vcarekids"> <i class="fab fa-facebook-square"></i></i></a>
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
                            <img src="public/assets/images/logo.jpg" alt="" width="20%"><span style="padding-left: 10px; font-size: 20px; color:black; text-decoration: none;"> <b>VanniShangam Vcarekids</b></span>
                            <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
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
            <div class="card">
                <div class="row session-title">
                    <h2> Our Recent Activities </h2>
                    <p>Take a look at what people say about US </p>
                </div>
                <div class="card-body">
                    <div class="blog-row row">
                        @foreach ($latestNews as $news)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($news->image); ?>" style="height:100%; "> <br><br>
                                    <h5 class="card-title">{{ $news->title }}</h5>
                                    <p>{{ \Illuminate\Support\Str::limit($news->content, 100) }} <a href="{{ $news->link }}" style="color:green;">Read More</a></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
        </section>
    </div>

    <div class="copy">
        <div class="container">
            <a href="https://www.smarteyeapps.com/">2024 &copy; All Rights Reserved | Designed and Developed by
                SICODE</a>

            <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>
    </div>

    <script src="public/adminpanel/js/app.min.js"></script>
    <script src="public/adminpanel/js/scripts.js"></script>
    <script src="public/adminpanel/js/custom.js"></script>
</body>

</html>