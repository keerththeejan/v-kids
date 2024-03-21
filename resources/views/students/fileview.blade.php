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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($documents as $document)
                                    <tr>
                                        <td><input type="checkbox" name="selected_documents[]"
                                                value="{{ $document->id }}"></td>

                                        <td style="text-transform: capitalize;">{{ $document->title }}</td>

                                        <td>
                                            <div class="btn-group mb-3 btn-group-sm" role="group"
                                                aria-label="Basic example">
                                                <button class="btn btn-danger"
                                                    onclick="confirmDelete('{{ $document->id }}')"><i
                                                        class="fas fa-times"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button id="downloadBtn" class="btn btn-primary">Download Selected Documents</button>
                    </section>
                </div>
            </div>

            @include('theme')
        </div>
    </div>

    @include('fooder')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.5.0/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script src="{{ asset('public/adminpanel/js/app.min.js') }}"></script>
    <script src="{{ asset('public/adminpanel/js/scripts.js') }}"></script>
    <script src="{{ asset('public/adminpanel/js/custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#downloadBtn').click(function() {
                var selectedDocuments = [];

                $('input[name="selected_documents[]"]:checked').each(function() {
                    selectedDocuments.push($(this).val());
                });

                if (selectedDocuments.length > 0) {
                    $.ajax({
                        url: "{{ route('downloadSelectedDocuments') }}",
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            document_ids: selectedDocuments
                        },
                        success: function(response) {
                            var blob = new Blob([response], {
                                type: 'application/zip'
                            });
                            saveAs(blob, 'selected_documents.zip');
                        },
                        error: function(xhr, status, error) {
                            alert('Error downloading documents.');
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
