</div>
<div class="footer-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-sm-12 footer-text">
                Copyright ⓒ Gapu Games. All Rights Reserved.
            </div>
        </div>
    </div>
</div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/static/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="/static/js/ajaxBody.js"></script>
        <script src="/static/js/smoothscroll.js"></script>

        <script src="<?php echo base_url()?>static/js/common.js"></script>


        <?php
        $total_url = $_SERVER['PHP_SELF'];
        $arr_splitted_url = explode('/', $total_url);

        if ($arr_splitted_url[count($arr_splitted_url) - 1] === "") {
            unset($arr_splitted_url[count($arr_splitted_url) - 1]);
        }

        $ctrl_name = $arr_splitted_url[count($arr_splitted_url) - 2];
        $view_name = $arr_splitted_url[count($arr_splitted_url) - 1];
        $filename = "";

        if ($ctrl_name == 'index.php') {
            $filename = 'static/js/'.strtolower($view_name).'/index.js';
        } else {
            $filename = 'static/js/'.strtolower($ctrl_name).'/'.strtolower($view_name).'.js';
        }

        if(file_exists($filename)) {
        ?>
            <script src="/GAPU/<?php echo $filename;?>"></script>
        <?php
        }
        if (strpos($filename, 'index.php')) {
            ?>
            <script src="/GAPU/static/js/home/index.js"></script>
            <?php
        }
        ?>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="/static/lib/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>