<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NVS Insurance</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <?php echo link_tag('assets/frontend/scss/nice-select.css')?>
    <?php echo link_tag('assets/frontend/css/style.css')?>
    <?php echo link_tag('assets/frontend/css/styles.css')?>
    <?php echo link_tag('assets/frontend/css/main.css')?>
</head>
<body>

    <!--Loading Pages -->
    <?php $this->load->view($main_view) ?>

    <!--Loading Pages -->
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <?php echo script_tag('assets/frontend/js/jquery.js')?>
    <?php echo script_tag('assets/frontend/js/jquery.nice-select.min.js')?>
    <?php echo script_tag('assets/frontend/js/fastclick.js')?>
    <?php echo script_tag('assets/frontend/js/prism.js')?>
    <?php echo script_tag('assets/frontend/js/index1.js')?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php echo script_tag('assets/frontend/js/script.js')?>

</body>

