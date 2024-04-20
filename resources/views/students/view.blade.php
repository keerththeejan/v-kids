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
                        @if (session()->has('message'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong> {{ session('message') }}</strong>
                                <meta http-equiv='refresh' content='2'>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <div class="card-header">
                                <div class="card-header-action">
                                    <a href="student" class="btn btn-primary">
                                        <i class="fas fa-user-plus"></i> Add Student
                                    </a>
                                </div>

                            </div>
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>District</th>
                                        <th>Image</th>
                                        <th>Action</th> <!-- Added a new column for actions -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td style="text-transform: capitalize;">S{{ $student->id }}</td>
                                            <td style="text-transform: capitalize;">{{ $student->fullname }}</td>
                                            <td style="text-transform: capitalize;">{{ $student->district }}</td>
                                            <td>

                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($student->image); ?>"
                                                    style="width:10%; margin:10px;">
                                            </td>
                                            <td>
                                                <div class="btn-group mb-3 btn-group-sm" role="group"
                                                    aria-label="Basic example">
                                                    <!-- Add Edit and Delete buttons -->
                                                    <a href="supdate{{ $student->id }}" class="btn btn-warning"><i
                                                            class="far fa-edit"></i></a>
                                                    <button class="btn btn-danger"
                                                        onclick="confirmDelete('{{ $student->id }}')"><i
                                                            class="fas fa-times"></i></button>
                                                    <a href="student-documents{{ $student->id }}" class="btn btn-info"><i
                                                            class="far fa-file"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

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

    <script>
        function confirmDelete(studentId) {
            if (confirm("Are you sure you want to delete this student?")) {
                window.location.href = "{{ url('studentdoc/delete') }}/" + studentId;
            }
        }
    </script>
</body>

</html>
