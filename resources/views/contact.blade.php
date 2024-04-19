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
    <header class="container-fluid">
        <!-- Header content here -->
    </header>
    <br>
    <div class="container">
        <section class="section">
            
            <div class="card mt-4">
                <div class="card-body">
                    <h2>Contact Us</h2>
                    <form action="your_server_script.php" method="POST">
                        <div class="form-group">
                            <label for="name">Your Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
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
