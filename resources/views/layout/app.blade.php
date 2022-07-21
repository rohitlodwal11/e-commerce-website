<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('public/asset/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
        href="{{asset('public/asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('public/asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/asset/plugins/jqvmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/asset/dist/css/adminlte.min.css?v=3.2.0')}}">
    <link rel="stylesheet" href="{{asset('public/asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/asset/plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('public/asset/plugins/summernote/summernote-bs4.min.css')}}">
    <!--Datatables  -->
    <link rel="stylesheet" href="{{asset('public/asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
        href="{{asset('public/asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- CSS only -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('layout.nav')
        @yield('app-section')
        @include('layout.aside')
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
        @include('layout.footer')
    </div>
    <script>
    $(document).ready(function() {
        loadcart();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function loadcart() {
            $.ajax({
                method: "GET",
                url: "{{url('/load-order-data')}}",
                success: function(response) {
                    $('.order-count').html('');
                    $('.order-count').html(response.count);

                }
            });
        }
    });
    </script>
    <script>
    $(document).ready(function() {
        loadcart();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function loadcart() {
            $.ajax({
                method: "GET",
                url: "{{url('/category-count')}}",
                success: function(response) {
                    $('.cat-count').html('');
                    $('.cat-count').html(response.count);

                }
            });
        }
    });
    </script>
    <script>
    $(document).ready(function() {
        loadcart();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function loadcart() {
            $.ajax({
                method: "GET",
                url: "{{url('/product-count')}}",
                success: function(response) {
                    $('.pro-count').html('');
                    $('.pro-count').html(response.count);

                }
            });
        }
    });
    </script>
    <script>
    $(document).ready(function() {
        loadcart();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function loadcart() {
            $.ajax({
                method: "GET",
                url: "{{url('/sub-count')}}",
                success: function(response) {
                    $('.sub-count').html('');
                    $('.sub-count').html(response.count);

                }
            });
        }
    });
    </script>
     <script>
    $(document).ready(function() {
        loadcart();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function loadcart() {
            $.ajax({
                method: "GET",
                url: "{{url('/user-count')}}",
                success: function(response) {
                    $('.user-count').html('');
                    $('.user-count').html(response.count);

                }
            });
        }
    });
    </script>
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- DAta tables -->
    <script src="{{asset('public/asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('public/asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/asset/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/asset/plugins/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('public/asset/plugins/sparklines/sparkline.js')}}"></script>
    <script src="{{asset('public/asset/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('public/asset/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('public/asset/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <script src="{{asset('public/asset/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('public/asset/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('public/asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}">
    </script>
    <script src="{{asset('public/asset/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('public/asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('public/asset/dist/js/adminlte.js?v=3.2.0')}}"></script>


    <!-- <script src="{{asset('public/asset/dist/js/demo.js')}}"></script> -->
    <script src="{{asset('public/asset/dist/js/pages/dashboard.js')}}"></script>
    @yield('scripts')
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
</body>

</html>