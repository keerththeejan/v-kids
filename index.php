<!DOCTYPE html>
<html lang="en">
<?php include('includes/config.php') ?>

<head>
    <meta charset="utf-8">
    <title>Vcare Kids</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="Details">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap1.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .fixed-size-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .img1 {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-phone me-2"></i>+1-416-644-1113</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@vcarekids.org</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0"> VanniShangam<span class="text-white">Vcarekids</span></h1>

            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="causes.html" class="nav-item nav-link">Causes</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="service.html" class="dropdown-item">Service</a>
                            <a href="donate.php" class="dropdown-item">Donate</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-secondary py-2 px-3" href="donate.php">
                        Donate Now
                    </a>&nbsp;
                    <a class="btn btn-outline-secondary py-2 px-3" href="login.php">
                        Admin
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/sli2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Let's Change The World With Humanity</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/sli1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Let's Save More Lifes With Our Helping Hand</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    <div class=" container p-0 mb-5">
        <div class="col-lg-12">
            <!-- event Start -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="container-xxl bg-light my-5 py-5">
                        <div class="container py-5">
                            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">

                                <h3 class="">Our Recent Activities</h3>
                            </div>
                            <div class="row g-4 justify-content-center">
                                <?php
                                $sql = "SELECT title, content, link, image FROM news ORDER BY id DESC LIMIT 3 ";
                                $result = $con->query($sql);

                                // Check if there are results
                                if ($result->num_rows > 0) {
                                    // Output data for each row
                                    while ($row = $result->fetch_assoc()) {
                                ?>

                                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                            <div class="causes-item d-flex flex-column bg-white border-top border-5 rounded-top overflow-hidden h-100">
                                                <div class="text-center p-4 pt-0">
                                                    <br>
                                                    <h6 class="mb-3"><?php echo $row["title"]; ?></h6>
                                                    <p style="font-size: 12px;"><?php echo $row["content"]; ?></p>
                                                </div>
                                                <div class="position-relative mt-auto">
                                                    <?php
                                                    if (!empty($row['image'])) {
                                                        $imageData = base64_encode($row['image']); // Convert binary data to base64
                                                        echo "<img src='data:image/jpeg;base64," . $imageData . "' alt='News Image' class='fixed-size-image'>";
                                                    } else {
                                                        echo "<p>No image available</p>";
                                                    }

                                                    ?>

                                                </div>
                                                <br>
                                                <a class="btn btn-outline-dark" href=" <?php echo $row["link"]; ?>">Read More</a>
                                            </div>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "<li>No news articles found.</li>";
                                }

                                ?>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="container py-5">
                        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">

                            <h3 class="">Up Coming Events</h3>
                        </div>
                        <div class="row g-4 justify-content-center">


                            <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="causes-item d-flex flex-column bg-white  border-5 rounded-top overflow-hidden h-100">
                                    <div class="text-center p-4 pt-0">
                                        <div class="row">
                                            <br>
                                            <div class="col-sm-12">
                                                <?php
                                                // Query to fetch events
                                                $events_query = "SELECT event_name, event_date, location, advertisement_image FROM events ORDER BY event_id DESC LIMIT 1;";
                                                $resultevent = $con->query($events_query);
                                                ?>
                                                <?php if ($resultevent && $resultevent->num_rows > 0): ?>
                                                    <?php while ($rowevent = $resultevent->fetch_assoc()): ?>

                                                        <div class="card h-100">
                                                            <img src="data:image/jpeg;base64,<?= base64_encode($rowevent['advertisement_image']) ?>"
                                                                class="card-img-top" alt="Event Image">
                                                            <div class="card-body">
                                                                <h5 class="card-title"><?= htmlspecialchars($rowevent['event_name']) ?></h5>
                                                                <p class="card-text"><strong>Date:</strong> <?= htmlspecialchars($rowevent['event_date']) ?></p>
                                                                <p class="card-text"><strong>Location:</strong> <?= htmlspecialchars($rowevent['location']) ?></p>
                                                            </div>
                                                        </div>

                                                    <?php endwhile; ?>
                                                <?php else: ?>
                                                    <p class="text-center">No events found.</p>
                                                <?php endif; ?>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="position-relative mt-auto">
                                        <div class="causes-overlay">
                                            <a class="btn btn-outline-light" href=" <?php echo $row["link"]; ?>">Read More</a>
                                            <div class="d-inline-flex btn-sm-square bg-dark text-white rounded-circle ms-2">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- event End -->
        </div>
    </div>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/child2.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="img/child3.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-dark py-1 px-3 mb-3">About Us</div>
                        <h1 class="display-6 mb-5">We Help People In Need Around The World</h1>
                        <div class="bg-light border-bottom border-5 border-dark rounded p-4 mb-4">
                            <p class="text-dark mb-2">Welcome to V United Care for Kids (VUCFK), a passionate and visionary organization dedicated to building a socially and economically strong society through education. Established in Canada for charitable purposes and activities, we embark on a mission to transform lives and shape a brighter future for generations to come. Religions, castes, gender discrimination, and socioeconomic status are all beneath the Kingdom of God. It accepts all people and changes their lives by implementing the moral and skill standards that the benevolent God created. ​</p>

                        </div>

                        <a class="btn btn-outline-dark py-2 px-3" href="" style=" width: 100%;">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Vision Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white h-100 p-4 p-xl-5">
                        <img src="img/logo.jpg" alt="" style="width: 100%;">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white  h-100 p-4 p-xl-5">

                        <h4 class="mb-3">Our Mission</h4>
                        <p class="mb-4">Our goal is to foster a socially and economically robust society by prioritizing education as the cornerstone of empowerment. Through accessible and inclusive educational initiatives, we aim to equip individuals with the knowledge, skills, and opportunities needed to build a prosperous and equitable future for our community</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white  h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Our Vision</h4>
                        <p class="mb-4">VUnited Care For Kids Inc (VanniShangam Vcarekids) is dedicated to becoming the foremost organization in fostering communities with elevated living standards through the cultivation of an education-centric ethos and fostering a self-sustaining economy. We envision a future where every individual is empowered through education, leading to self-reliance and collective prosperity.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- vision End -->

    <!-- Causes Start -->

    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-dark py-1 px-3 mb-3">Feature Causes</div>
                <h5 class="">Every Child Deserves The Opportunity To Learn</h5>
            </div>
            <?php


            $sqlstudent = "SELECT id,fullname, Details, image FROM students";
            $resultstudent = $con->query($sqlstudent);
            ?>

            <div class="row g-4 justify-content-center">

                <?php while ($rowstudent = $resultstudent->fetch_assoc()): ?>
                    <div class="col-lg-3 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="causes-item d-flex flex-column bg-white border-top border-5 border-light rounded-top overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <br>
                                <h4 class="mb-3"><?php echo ($rowstudent['fullname']); ?></h4>
                                <p><?php echo ($rowstudent['Details']); ?></p>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="data:image/jpeg;base64,<?php echo base64_encode($rowstudent['image']); ?>" alt="Student Image" style="height: 250px; width: 100%;">

                            </div>
                            <br>
                            <a class="btn btn-outline-dark" href="stuprofile.php?id=<?php echo ($rowstudent['id']); ?>">
                                Read More
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <!-- Causes End -->


    <!-- Donate Start -->
    <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="img/child3.jpg">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-dark py-1 px-3 mb-3">Donate Now</div>
                    <h1 class="display-6 text-white mb-5">Thanks For The Results Achieved With You</h1>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-white p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <a href="donate.php" class="btn btn-dark px-5" style="height: 60px;">
                                        Donate Now
                                        <div class="d-inline-flex btn-sm-square bg-dark text-light rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-dark py-1 px-3 mb-3">Contact Us</div>
                    <h1 class="display-6 mb-5">If You Have Any Query, Please Contact Us</h1>

                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark py-2 px-3 me-3">
                                    Send Message
                                    <div class="d-inline-flex btn-sm-square bg-white text-dark rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->




    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-4">
                    <h1 class="fw-bold text-primary m-0">Vcare<span class="text-white">kids</span></h1>
                    <p>Smart Eye is a leading provider of information technology, consulting, and business process services. Our dedicated employees offer strategic insights, technological expertise and industry experience.</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>8-3500 McNicoll Ave, , Scarborough, ON, Canada, M1V 4C7</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+1-416-644-1113</p>
                    <p><i class="fa fa-envelope me-3"></i>info@vcarekids.org</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">Home</a>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Donation</a>
                </div>

            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">vcarekids</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="">SICODE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-sm btn-dark btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>