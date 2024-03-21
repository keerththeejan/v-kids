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
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($donors as $donor)
                                        <tr>
                                            <td style="text-transform: capitalize;">{{ $donor->donarfullname }}</td>
                                            <td style="text-transform: capitalize;">{{ $donor->email }}</td>
                                            
                                            <td>


                                                <div class="btn-group mb-3 btn-group-sm" role="group"
                                                    aria-label="Basic example">
                                                    <!-- Add Edit and Delete buttons -->
                                                    <a href="{{ $donor->id }}" class="btn btn-warning"><i
                                                            class="far fa-edit"></i></a>
                                                    <button class="btn btn-danger"
                                                        onclick="confirmDelete('{{ $donor->id }}')"><i
                                                            class="fas fa-times"></i></button>
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

    <script src="adminpanel/js/app.min.js"></script>
    <script src="adminpanel/js/scripts.js"></script>
    <script src="adminpanel/js/custom.js"></script>

    <script>
        function confirmDelete(donorId) {
            if (confirm("Are you sure you want to delete this donor?")) {
                window.location.href = "{{ url('donors/delete') }}/" + donorId;
            }
        }
    </script>
</body>

</html>
