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
                <div class="main-content">
                    <section class="section">
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-6">
                                <form class="needs-validation" novalidate="" method="post" action="filecreate" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header">
                                        <h2>Student Files</h2>
                                    </div>
                                    <div class="card-body">



                                        <div class="form-group">
                                            <label>Document Type</label>

                                            @csrf
                                            <select name="title" class="form-control" required="">
                                                <option value="" selected disabled>Select Document Type</option>
                                                @foreach ($packages as $package)
                                                <option value="{{ $package->id }}">{{ $package->name }}</option>
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
                            <div class="col-6 col-md-6 col-lg-6">

                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>

                                            <th>Full Name</th>
                                            <th></th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <form action="download.pdf" method="POST">
                                            @csrf
                                            @foreach ($documents as $document)
                                            <tr>

                                                <td>{{ $document->name }}</td>

                                                <td><a href="storage/app/public/pdf/{{ $document->title }}.pdf">
                                                        Download
                                                    </a></td>
                                                <td>
                                                    <div class="btn-group mb-3 btn-group-sm" role="group" aria-label="Basic example">
                                                        <button class="btn btn-danger" onclick="confirmDelete('{{ $document->id }}')"><i class="fas fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            @include('theme')
        </div>
    </div>


    <script>
        function confirmDelete(studentId) {
            if (confirm("Are you sure you want to delete this document?")) {
                window.location.href = "{{ url('studentdoc/delete') }}/" + studentId;
            }
        }
    </script>


    @include('fooder')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.5.0/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script src="{{ asset('public/adminpanel/js/app.min.js') }}"></script>
    <script src="{{ asset('public/adminpanel/js/scripts.js') }}"></script>
    <script src="{{ asset('public/adminpanel/js/custom.js') }}"></script>

</body>

</html>