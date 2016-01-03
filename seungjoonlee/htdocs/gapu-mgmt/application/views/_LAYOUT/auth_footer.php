<script src="/static/lib/admin/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<script src="/static/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/static/lib/admin/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<?php
$total_url = $_SERVER['PHP_SELF'];
$arr_splitted_url = explode('/', $total_url);

$ctrl_name = $arr_splitted_url[count($arr_splitted_url) - 2];
$view_name = $arr_splitted_url[count($arr_splitted_url) - 1];
$filename = "";

if ($ctrl_name == 'index.php') {
    $filename = 'static/js/' . strtolower($view_name) . '/index.js';
} else {
    $filename = 'static/js/' . strtolower($ctrl_name) . '/' . strtolower($view_name) . '.js';
}

if (file_exists($filename)) {
    ?>
    <script src="/MGMT/<?php echo $filename; ?>"></script>
    <?php
}


if (strpos($filename, 'create') || strpos($filename, 'update')) {
    ?>
    <script src="/static/lib/smarteditor/js/HuskyEZCreator.js"></script>
    <?php
}
?>
</body>
</html>
