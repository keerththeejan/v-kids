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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>name</th>
                                                    <th>Date</th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @foreach ($contacts as $contact)
                                                <tr>
                                                    <td>{{ $contact->name }}</th>
                                                    <th>{{ $contact->created_at }}</th>
                                                    <th><a href="msg{{ $contact->id }}">See Msg</a></th>
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
</body>

</html>