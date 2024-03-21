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
                            <!-- New document Type Form -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card-header">
                                    <h4>New Document Type</h4>
                                </div>
                                <br>

                                <form class="needs-validation" method="POST" action="packagecreate">
                                    @csrf
                                    <label for="documentName">Enter Document Name:</label>
                                    <input type="text" id="documentName" name="documentName" class="form-control"
                                        required="">
                                    <br>
                                    <div class="card-footer text-right">
                                        <input type="submit" value="Save" name="save" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>

                            <!-- Table view of documents -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Document Types</h4>
                                    </div>
                                    <div class="card-body">
                                        <!-- Table view code goes here -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($packages as $package)
                                                    <tr>
                                                        <td>{{ $package->id }}</td>
                                                        <td>{{ $package->name }}</td>
                                                       
                                                        <td>
                                                            <div class="btn-group mb-3 btn-group-sm" role="group"
                                                                aria-label="Basic example">
                                                                <!-- Add Edit and Delete buttons -->
                                                                <a href="{{ $package->id }}" class="btn btn-warning"><i
                                                                        class="far fa-edit"></i></a>
                                                                <button class="btn btn-danger"
                                                                    onclick="confirmDelete('{{ $package->id }}')"><i
                                                                        class="fas fa-times"></i></button>
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
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
    <script>
        function confirmDelete(packageId) {
            if (confirm("Are you sure you want to delete this student?")) {
                window.location.href = "{{ url('packages/delete') }}/" + packageId;
            }
        }
    </script>

</body>

</html>
