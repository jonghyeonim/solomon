<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>GAPU</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="shortcut icon" href="/static/img/gq_symbol.png" />-->

    <link href="/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>static/css/common.css" rel="stylesheet">
    <link href="<?php echo base_url()?>static/css/font.css" rel="stylesheet">
    <link href="/static/lib/animation/animate.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>

    <?php
    $total_url = $_SERVER['PHP_SELF'];
    $arr_splitted_url = explode('/', $total_url);

    if ($arr_splitted_url[count($arr_splitted_url) - 1] === "") {
        unset($arr_splitted_url[count($arr_splitted_url) - 1]);
    }

    $ctrl_name = $arr_splitted_url[count($arr_splitted_url) - 2];
    $view_name = $arr_splitted_url[count($arr_splitted_url) - 1];
    $filename = "";
    $mobile = 'm';


    if ($ctrl_name == 'index.php') {
        $filename = 'static/css/'.strtolower($view_name).'/index.css';
    } else {
        if (count($arr_splitted_url) == 6) {
            $filename = 'static/css/m/'.strtolower($ctrl_name).'/'.strtolower($view_name).'.css';
        } else {
            $filename = 'static/css/'.strtolower($ctrl_name).'/'.strtolower($view_name).'.css';
        }
    }
    
    if(file_exists($filename)) {

        ?>
        <link href="/GAPU/<?php echo $filename; ?>" rel="stylesheet">
        <?php
    }
    if (strpos($filename, 'index.php')) {
        ?>
        <link href="/GAPU/static/css/home/index.css" rel="stylesheet">
        <?php
    }

    if (strpos($filename, 'help')) {
    ?>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
    <?php
    }
    ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="body-container">
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