<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GAPU</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="/static/img/tab_01.png" />
    <link href="/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>

    <link href="/static/lib/admin/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="/static/lib/admin/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/lib/admin/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
    <link href="/static/lib/admin/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo base_url() ?>static/css/common.css" rel="stylesheet" type="text/css"/>

    <?php
    $total_url = $_SERVER['PHP_SELF'];
    $arr_splitted_url = explode('/', $total_url);

    $ctrl_name = $arr_splitted_url[count($arr_splitted_url) - 2];
    $view_name = $arr_splitted_url[count($arr_splitted_url) - 1];
    $filename = "";

    if ($ctrl_name == 'index.php') {
        $filename = 'static/css/' . strtolower($view_name) . '/index.css';
    } else {
        $filename = 'static/css/' . strtolower($ctrl_name) . '/' . strtolower($view_name) . '.css';
    }

    if (file_exists($filename)) {
        ?>
        <link href="<?php echo base_url().$filename; ?>" rel="stylesheet">

        <?php
    }

    if (strpos($filename, 'create') || strpos($filename, 'submit') || strpos($filename, 'update')) {
        ?>
        <link href="<?php echo base_url()?>static/lib/summernote/summernote.css" rel="stylesheet">
        <?php
    }

    if (strpos($filename, '/blog/detail') || strpos($filename, '/user/detail')) {
        ?>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <?php
    }
    ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue sidebar-mini">
<?php ini_set('display_errors', "1") ?>
<div class="wrapper">
    <?php
    $flashdata = $this->session->flashdata('message');
    if ($flashdata != null) {
        ?>

        <script type="text/javascript">
            alert('<?=$this->session->flashdata('message')?>');
        </script>
        <?php
    }
    ?>
    <header class="main-header">
        <a href="<?= site_url('/home/index') ?>" class="logo">
            <span class="logo-lg"><b>GAPU</b></span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= site_url('auth/logout') ?>">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
