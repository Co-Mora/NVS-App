<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NVS Insurance</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <?php echo link_tag('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')?>
    <!-- Font Awesome -->
    <?php echo link_tag('assets/bower_components/font-awesome/css/font-awesome.min.css')?>
    <!-- Ionicons -->
    <?php echo link_tag('assets/bower_components/Ionicons/css/ionicons.min.css')?>
    <!-- DataTables -->
    <?php echo link_tag('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>
    <!-- Theme style -->
    <?php echo link_tag('assets/dist/css/AdminLTE.min.css')?>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <?php echo link_tag('assets/dist/css/skins/_all-skins.min.css')?>
    <!-- Morris chart -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- jvectormap -->
    <?php echo link_tag('assets/bower_components/jvectormap/jquery-jvectormap.css')?>
    <!-- Date Picker -->
    <?php echo link_tag('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')?>
    <!-- Daterange picker -->
    <?php echo link_tag('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')?>
    <!-- bootstrap wysihtml5 - text editor -->
    <?php echo link_tag('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">

    <!--Loading page -->
    <?php $this->load->view($main_view); ?>

    <?php echo script_tag('assets/bower_components/jquery/dist/jquery.min.js')?>
    <!-- jQuery UI 1.11.4 -->
    <?php echo script_tag('assets/bower_components/jquery-ui/jquery-ui.min.js')?>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <?php echo script_tag('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>
    <!-- Morris.js charts -->
    <?php echo script_tag('assets/bower_components/raphael/raphael.min.js')?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <!-- Sparkline -->
    <?php echo script_tag('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')?>
    <!-- jvectormap -->
    <?php echo script_tag('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>
    <?php echo script_tag('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>
    <!-- jQuery Knob Chart -->
    <?php echo script_tag('assets/bower_components/jquery-knob/dist/jquery.knob.min.js')?>
    <!-- daterangepicker -->
    <?php echo script_tag('assets/bower_components/moment/min/moment.min.js')?>
    <?php echo script_tag('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')?>
    <!-- datepicker -->
    <?php echo script_tag('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>
    <!-- Bootstrap WYSIHTML5 -->
    <?php echo script_tag('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>
    <!-- Slimscroll -->
    <?php echo script_tag('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')?>
    <!-- FastClick -->
    <?php echo script_tag('assets/bower_components/fastclick/lib/fastclick.js')?>
    <!-- AdminLTE App -->
    <?php echo script_tag('assets/dist/js/adminlte.min.js')?>
    <!-- AdminLTE dashboard demo (This is only for demo purposes)
            <?php echo script_tag('assets/dist/js/pages/dashboard.js')?>
            <!-- AdminLTE for demo purposes
            <?php echo script_tag('assets/dist/js/demo.js')?>-->

    </body>