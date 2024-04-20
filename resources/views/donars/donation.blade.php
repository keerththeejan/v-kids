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
                            <h1>Donation Form</h1>
                        </div>

                        <div class="section-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="donor_name">Donor Name:</label>
                                                    <select name="donor_name" id="donor_name" class="form-control">
                                                        <option value="John Doe">John Doe</option>
                                                        <option value="Jane Doe">Jane Doe</option>
                                                        <!-- Add more options as needed -->
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="donation_amount">Donation Amount:</label>
                                                    <input type="text" name="donation_amount" id="donation_amount" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="donation_date">Donation Date:</label>
                                                    <input type="date" name="donation_date" id="donation_date" class="form-control">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit Donation</button>
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
