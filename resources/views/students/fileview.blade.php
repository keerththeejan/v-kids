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
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th>ID</th>
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
                                        <td>{{ $document->title }}</td>
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