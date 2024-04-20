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
                        <div class="card">
                            <div class="container">
                                <div class="col-12 col-md-12 col-lg-12">

                                    <div class="card-header">
                                        <h2>New Events</h2>
                                    </div>
                                    <form action="eventcreate" method="POST" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="photoname" class="form-control" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="file" name="photo" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                Choose a photo file
                                            </div>
                                        </div>

                                        <div class="card-footer text-right">
                                            <input type="submit" value="Save" name="save" class="btn btn-primary">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
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