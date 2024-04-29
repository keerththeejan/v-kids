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
                                <form  method="POST" action="donarupdate" >
                                    @csrf
                                    
                                    <div class="card-header">
                                        <h2>Edit Donar</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Donar Full Name</label>
                                            <input type="hidden" name="did" value="{{ $donar->id }}">
                                            <input type="text" name="dfullname" class="form-control" value="{{ $donar->donarfullname }}" required="">
                                            <div class="invalid-feedback">
                                                What's Donar Full Name?
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Donar Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ $donar->email }}" required="">
                                            <div class="invalid-feedback">
                                                What's Donar Email Address?
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Donar Phone Number</label>
                                            <input type="number" name="phone" class="form-control" value="{{ $donar->phone }}" required="">
                                            <div class="invalid-feedback">
                                                What's Donar Phone Number?
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Donar Country</label>
                                            <input type="text" name="country" class="form-control" value="{{ $donar->Country }}" required="">
                                            <div class="invalid-feedback">
                                                What's Donar Country?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">Update</button> 
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

    <!-- Correct script paths -->
    <script src="{{ asset('public/adminpanel/js/app.min.js') }}"></script>
    <script src="{{ asset('public/adminpanel/js/scripts.js') }}"></script>
    <script src="{{ asset('public/adminpanel/js/custom.js') }}"></script>
</body>

</html>
