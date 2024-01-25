<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Organisation Management System </title>
    <link rel="shortcut icon" type="image/png" href="#" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/select2/dist/css/select2.min.css') }}">


    <style>
        html{
            font-size: 85%;
        }
    </style>
    @yield('styles')
</head>

<body>
<!--  Body Wrapper -->

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->

    @include('layouts._sidebar')

    <div class="body-wrapper">
        <!--  Header Start -->

        @include('layouts._header')
        <!--  Header End -->

        <div class="container-fluid">

            @yield('body')

        </div>

    </div>

</div>

<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/js/app.init.js') }}"></script>
<script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>

<script src="{{ asset('assets/js/custom.js') }}"></script>

<script src="{{ asset('assets/js/dashboard.js') }}"></script>

<script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/libs/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/forms/select2.init.js') }}"></script>

<script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>

<script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
<script src="{{ asset('assets/libs/bootstrap-table/dist/bootstrap-table.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/tables/bootstrap-table.init.js') }}"></script>

@include('layouts._alerts')

@yield('scripts')
</body>

</html>
