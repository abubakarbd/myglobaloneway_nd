<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')
        | Global One Way</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="EtTDUjtT78FJNmbpa5yoAVpGhuI0Ywk9Dk56xpUB" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}images/favicon.ico">
    <style>
        [wire\:loading] {
            display: none;
        }

        [wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }
    </style>
    <!-- App css -->

    <link href="{{ asset('/') }}css/app.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}css/bootstrap-dark.min.css" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('/') }}css/app-dark.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/') }}libs/datatables/dataTables.bootstrap4.css">
    <link href="{{ asset('/') }}libs/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
@stack('css')
    <style>
        #page-topbar {
            position: absolute;
        }
    </style>

    
    <script defer data-turbolinks-track="reload" src="{{ asset('/') }}js/app.js"></script>
    <!-- JAVASCRIPT -->
    <script data-turbolinks-track="reload" src="{{ asset('/') }}libs/jquery/jquery.min.js"></script>
    <script data-turbolinks-track="reload" src="{{ asset('/') }}libs/bootstrap/bootstrap.min.js"></script>
    <script data-turbolinks-track="reload" src="{{ asset('/') }}libs/metismenu/metismenu.min.js"></script>
    <script data-turbolinks-track="reload" src="{{ asset('/') }}libs/simplebar/simplebar.min.js"></script>
    <script data-turbolinks-track="reload" src="{{ asset('/') }}libs/node-waves/node-waves.min.js"></script>
    <script data-turbolinks-track="reload" src="{{ asset('/') }}libs/datatables/datatables.min.js"></script>
    <!-- DataTables -->
    <script src="{{ asset('/') }}libs/datatables/jquery.dataTables.js"></script>
    <script src="{{ asset('/') }}libs/datatables/dataTables.bootstrap4.js"></script>
    <script data-turbolinks-track="reload" src="{{ asset('/') }}libs/jszip/jszip.min.js"></script>
    <script data-turbolinks-track="reload" src="{{ asset('/') }}libs/pdfmake/pdfmake.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine-ie11.js" defer></script>

    <!-- Sweet Alerts js -->
    <script data-turbolinks-track="reload" src="{{ asset('/') }}libs/sweetalert2/sweetalert2.min.js">
    </script>
</head>


<body data-layout="detached" data-topbar="colored">
    <!-- Begin page -->
    <div class="container-fluid">
        <div id="layout-wrapper">
            @includeIf('layouts.inc.header')
            <!-- ========== Left Sidebar Start ========== -->
            @includeIf('layouts.inc.sidebar')
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->
    </div>
    <!-- END container-fluid -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('/') }}js/pages/backend.js"></script>
    @stack('js')
     <script>
        window.livewire.on('success', message => {
        Swal.fire({
            title: message.title || 'Success',
            text: message.text,
            type: 'success',
            confirmButtonColor: '#3b5de7'
        });
    });

    window.livewire.on('success_back', message => {
        Swal.fire({
            title: message.title || 'Success',
            text: message.text,
            type: 'success',
            confirmButtonColor: '#3b5de7'
        }).then(function () {
            window.location = message.back;
        });
    });

    window.livewire.on('error', message => {
        Swal.fire({
            title: message.title || 'Error',
            text: message.text,
            type: 'error',
            confirmButtonColor: '#3b5de7'
        });
    });

    // $(document).on('turbolinks:load', function () {
    //     $('[data-toggle="tooltip"]').each(function () {
    //         var $tooltip = $(this);
    //         $tooltip.tooltip();
    //     });
    // });

    $(document).on("ready page:change", function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    </script>
</body>

</html>