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
                        <div class="section-header">
                            <h1>Add News</h1>
                        </div>
                        <div class="section-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="newscreate" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input type="text" name="title" id="title" class="form-control" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="link">Link</label>
                                                    <input type="text" name="link" id="link" class="form-control" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="content">Content</label>
                                                    <textarea name="content" id="content" class="form-control" required></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <input type="file" name="photo" class="form-control" required="">
                                                    <div class="invalid-feedback">
                                                        Choose a photo file
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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