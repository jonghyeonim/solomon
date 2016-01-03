<?php
if (!empty($items)) {
    foreach ($items as $item) {
?>
        <div class="notice-item">
            <div class="row">
                <div class="notice-title col-sm-10">
                    <span>
                        <?php echo $item->title; ?>
                    </span>
                </div>
                <div class="notice-content col-lg-12 col-sm-12 col-xs-12">
                    <div class="content">
                        <?php echo $item->content; ?>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
?>

