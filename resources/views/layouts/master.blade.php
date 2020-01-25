<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link href="{{ asset('/template/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
    <script src="{{ asset('template/js/all.min.js') }}" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    {{-- Navbar --}}
    @include('layouts.partials._navbar')

    <div id="layoutSidenav">

        {{-- Sidebar --}}
        @include('layouts.partials._sidebar')

        {{-- Content --}}
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h3 class="mt-2">@yield('title')</h3>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">@yield('breadcrumb')</li>
                    </ol>
                    <div class="row">
                        <div class="col-md-12">

                            @yield('content')

                        </div>
                    </div>
                </div>
            </main>

            {{-- Footer --}}
            @include('layouts.partials._footer')

        </div>

    </div>
    <script src="{{ asset('template/js/jquery-3.4.1.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('template/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('template/js/scripts.js') }}"></script>
    <script src="{{ asset('template/js/Chart.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('template/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('template/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('template/js/jquery.dataTables.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('template/js/dataTables.bootstrap4.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('template/assets/demo/datatables-demo.js') }}"></script>
</body>

</html>
