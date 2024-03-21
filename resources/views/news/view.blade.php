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
                            <h1>News</h1>
                        </div>

                        <div class="section-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <!-- Display news data in a table -->
                                            @if (session()->has('message'))
                                                <div class="alert alert-danger alert-dismissible fade show"
                                                    role="alert">
                                                    <strong> {{ session('message') }}</strong>
                                                    <meta http-equiv='refresh' content='2'>
                                                </div>
                                            @endif
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                       
                                                        <th>Date</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($news as $item)
                                                        <tr>
                                                            <td>{{ $item->title }}</td>
                                                           
                                                            <td>{{ $item->created_at->format('Y-m-d')}}</td>
                                                            <td>
                                                                <div class="btn-group mb-3 btn-group-sm" role="group"
                                                                    aria-label="Basic example">
                                                                    <!-- Add Edit and Delete buttons -->
                                                                    <a href="edit/{{ $item->id }}"
                                                                        class="btn btn-warning"><i
                                                                            class="far fa-edit"></i></a>
                                                                    <button class="btn btn-danger"
                                                                        onclick="confirmDelete('{{ $item->id }}')"><i
                                                                            class="fas fa-times"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <!-- End of table -->

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

    <script>
        function confirmDelete(newsId) {
            if (confirm("Are you sure you want to delete this student?")) {
                window.location.href = "{{ url('news/delete') }}/" + newsId;
            }
        }
    </script>

    @include('fooder')

    <script src="public/adminpanel/js/app.min.js"></script>
    <script src="public/adminpanel/js/scripts.js"></script>
    <script src="public/adminpanel/js/custom.js"></script>
</body>

</html>
