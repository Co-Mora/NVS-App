<?php if($this->session->userdata('logged_in')): ?>

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
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?php echo base_url()?>home" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>N</b>VS</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>NVS</b>Insurance</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url('assets/dist/img/avatar.png')?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>
                                <?php if($this->session->flashdata('user_register')): ?>

                                    <?php echo $this->session->flashdata('user_register'); ?>

                                <?php endif; ?>
                                <?php if($this->session->userdata('username')): ?>

                                    <?php echo $this->session->userdata('username'); ?>

                                <?php endif; ?>
                            </p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?php echo base_url()?>home">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="<?php echo base_url()?>industries">
                                <i class="fa fa-bank"></i>
                                <span>Industries</span>
                                <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url()?>industries"><i class="fa fa-search-plus"></i>View All Industries</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-address-book"></i>
                                <span>Customers Details</span>
                                <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url()?>view_customer"><i class="fa fa-search-plus"></i>View Customers</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>logout">
                                <i class="fa fa-sign-out"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                </section>
            </aside>
            <!-- Loading pages -->

                <?php $this->load->view($main_view); ?>

            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2018 <a href="http://www.sighttechnologies.co/" target="_blank">Developed by Sight Technologies</a>.</strong> All rights
                reserved.
            </footer>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
            </div>
        </aside>
        <div class="control-sidebar-bg"></div>
        </div>
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

        <script>
            $(function () {
                "use strict";
                var bar = new Morris.Bar({
                    element: 'bar-chart',
                    resize: true,
                    data: [
                        {y: 'Industry', a: <?php echo $industries;?>, b: 90},
                        {y: 'Nature of Business', a: <?php echo $administrative + $accommodation + $retail + $contractor + $estate + $event + $manufacturer ?>, b: 65},
                        {y: 'Policies', a: <?php echo $policy1 + $policy2 + $policy3 + $policy4 + $policy5 + $policy6 +$policy7 ?>, b: 100},
                        {y: 'Customer Details', a: <?php echo $get_customers;?>, b: 65},
                        {y: 'Users Registration ', a: <?php echo $get_users;?>, b: 40},
                    ],
                    barColors: ['#e53935', '#e35d5b'],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Number', '2018'],
                    hideHover: 'auto'
                });
            });
        </script>
</body>
    <?php else:?>
        <?php redirect('login') ?>
<?php endif; ?>