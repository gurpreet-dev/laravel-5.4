<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin') }}</title>

    <!-- Styles -->
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/css/admin/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/admin/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/css/admin/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/admin/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/css/admin/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/css/admin/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/css/admin/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/css/admin/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/css/admindaterangepicker.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="hold-transition login-page">


        @yield('content')

</body>

<!-- jQuery 3 -->
<script src="/js/admin/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/js/admin/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/js/admin/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/js/admin/raphael.min.js"></script>
<script src="/js/admin/morris.min.js"></script>
<!-- Sparkline -->
<script src="/js/admin/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/js/admin/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/js/admin/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/js/admin/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/js/admin/moment.min.js"></script>
<script src="/js/admin/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/js/admin/bootstrap-datepicker.min.js"></script>
<!-- Slimscroll -->
<script src="/js/admin/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/js/admin/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/js/admin/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/js/admin/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/js/admin/demo.js"></script>

</html>
