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
                                <form method="POST" action="filecreate" enctype="multipart/form-data">
                                    @csrf

                                    <div class="card-header">
                                        <h2>Student Files</h2>
                                    </div>
                                    <br>
                                    <div class="card-header-action">
                                        <a href="students" class="btn btn-primary">
                                            <i class="fas fa-user-info"></i> View Students
                                        </a>
                                    </div>

                                    <div class="card-body">
                                        @if (session()->has('error'))
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong> {{ session('error') }}</strong>
                                            <meta http-equiv='refresh' content='3'>
                                        </div>
                                        @endif
                                        
                                            
                                            <input type="hidden" class="form-control" name="sid" value="{{ $students->id}}">
                                            
                                       
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <input type="text" class="form-control" value="{{ $students->fullname}}">
                                            <div class="invalid-feedback">
                                                Select student Name
                                            </div>
                                        </div>

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
                                @if (session()->has('success'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong> {{ session('success') }}</strong>
                                    <meta http-equiv='refresh' content='3'>
                                </div>
                                @endif
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>

                                            <th>Document Name</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
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