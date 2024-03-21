<!DOCTYPE html>
<html lang="en">

<head>
    @include('script')
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('top-nov')
            @include('sidenav')
            
            <div class="section-body">
                <!-- add content here -->
                <div class="main-content">
                    <section class="section">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <form class="needs-validation" novalidate="" method="post" action="donarcreate"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header">
                                        <h2>New Donars</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Donar Full Name</label>
                                            <input type="text" name="dfullname" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                What's Donar Full Name?
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>Donar Email</label>
                                            <input type="email" name="email" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                What's Donar Email Address?
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label>Donar Phone Number</label>
                                            <input type="number" name="phone" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                What's Donar Phone Number?
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>Donar Country</label>
                                            <input type="text" name="country" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                What's Donar Country?
                                            </div>
                                        </div>




                                    </div>
                                    <div class="card-footer text-right">
                                        <input type="submit" value="Save" name="save" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>


                    </section>
                </div>
            </div>

            @include('theme')
        </div>
    </div>

    @include('fooder')

    <script src="public/adminpanel/js/app.min.js"></script>
    <script src="public/adminpanel/js/scripts.js"></script>
    <script src="public/adminpanel/js/custom.js"></script>
</body>

</html>
