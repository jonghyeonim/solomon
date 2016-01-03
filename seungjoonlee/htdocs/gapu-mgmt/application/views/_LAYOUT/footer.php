<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Management</b>
    </div>
    <strong>Copyright &copy; <a href="http://goqual.com/GAPU">GAPU</a>.</strong> All rights reserved.
</footer>

</div>
<script src="/static/lib/admin/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<script src="/static/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<script src="/static/lib/admin/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="/static/lib/admin/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

<script src="/static/lib/admin/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/static/lib/admin/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<script src="/static/lib/admin/plugins/select2/select2.full.min.js" type="text/javascript"></script>
<script src="/static/lib/admin/js/app.min.js" type="text/javascript"></script>
<script src="/static/lib/admin/js/demo.js" type="text/javascript"></script>
<script src="/static/js/ajaxBody.js"></script>

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


if (strpos($filename, 'create') || strpos($filename, 'submit') || strpos($filename, 'update')) {
    ?>
    <script src="<?php echo base_url()?>static/lib/summernote/summernote.js"></script>
    <?php
}
?>
</body>
</html>
