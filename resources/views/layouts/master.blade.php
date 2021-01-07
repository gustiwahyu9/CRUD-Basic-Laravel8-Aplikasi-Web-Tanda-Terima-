<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi Tanda Terima</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->

    <!-- datetimepicker -->
    <link rel="stylesheet" href="{{asset('datepicker/dist/css/bootstrap-datepicker.css')}}">
    <!-- /datetimepicker -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- <link rel="shortcut icon" type="image/png/" href="{{asset('admin/logobarufix.png')}}"> -->

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.includes.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <!-- sidebar -->
        @include('layouts.includes.sidebar')
        <!-- /.sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- footer -->
        @include('layouts.includes.footer')
        <!-- /footer -->

        <!-- Control Sidebar -->
        
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/assets/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin/assets/js/demo.js')}}"></script>

    <script src="{{asset('datepicker/dist/js/bootstrap-datepicker.js')}}"></script>

    <script type="text/javascript">
        $(function(){
        $('.year').datepicker({
                minViewMode: 2,
                format: 'yyyy',
                autoclose: true
            });
        });
    </script>


</body>

</html>