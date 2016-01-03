<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SOMETHINGGOODS</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/lib/admin/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="/static/lib/admin/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php
    $total_url = $_SERVER['PHP_SELF'];
    $arr_splitted_url = explode('/', $total_url);

    $ctrl_name = $arr_splitted_url[count($arr_splitted_url) - 2];
    $view_name = $arr_splitted_url[count($arr_splitted_url) - 1];
    $filename = "";

    $filename = 'static/css/' . strtolower($ctrl_name) . '/' . strtolower($view_name) . '.css';

    if (file_exists($filename)) {
        ?>
        <link href="/MGMT/<?php echo $filename; ?>" rel="stylesheet">
        <?php
    }
    ?>
</head>
<body class="login-page">
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