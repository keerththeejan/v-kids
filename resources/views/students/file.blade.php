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
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <form class="needs-validation" novalidate="" method="post" action="filecreate"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header">
                                        <h2>New Students File</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Student Name</label>

                                            @csrf
                                            <select id="studentSelect" name="sid" class="form-control"
                                                required="">
                                                <option value="" selected disabled>Select Student Name</option>
                                                @foreach ($students as $id => $name)
                                                    <option value="{{ $id }}">{{ $name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Select student Name
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>Document Type</label>

                                            @csrf
                                            <select name="title" class="form-control" required="">
                                                <option value="" selected disabled>Select Document Type</option>
                                                @foreach ($packages as $id => $name)
                                                    <option value="{{ $id }}">{{ $name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Select Package
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label>File</label>
                                            <input type="file" name="pdf" class="form-control" required="">
                                            <div class="invalid-feedback">
                                                Choose a photo file
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#student-select').on('change', function() {
                var studentId = $(this).val();

                $.ajax({
                    url: '/get-student-documents', // Update this URL with your route
                    method: 'GET',
                    data: {
                        sid: studentId
                    },
                    success: function(response) {
                        $('#documents-table tbody').empty(); // Clear existing table rows

                        if (response.length > 0) {
                            $('#documents-table')
                        .show(); // Show the table if there are documents

                            response.forEach(function(document) {
                                $('#documents-table tbody').append(
                                    '<tr>' +
                                    '<td>' + document.title + '</td>' +
                                    '<td>' + document.path + '</td>' +
                                    '</tr>'
                                );
                            });
                        } else {
                            $('#documents-table')
                        .hide(); // Hide the table if no documents are found
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>


    <script src="public/adminpanel/js/app.min.js"></script>
    <script src="public/adminpanel/js/scripts.js"></script>
    <script src="public/adminpanel/js/custom.js"></script>
</body>

</html>
