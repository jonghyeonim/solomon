<div class="content-wrapper">
    <section class="content-header">
        <h1>
            공지사항
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title" class="col-sm-1 control-label">제목</label>

                                <div class="col-sm-11 sg-item-content">
                                    <?php echo $item->title ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">분류</label>

                                <div class="col-sm-11 sg-item-content">
                                    <?php echo $item->label ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">작성자</label>

                                <div class="col-sm-11 sg-item-content">
                                    <?php echo $item->username ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">작성일</label>

                                <div class="col-sm-11 sg-item-content">
                                    <?php echo date("Y-m-d", strtotime($item->created)); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">수정일</label>

                                <div class="col-sm-11 sg-item-content">
                                    <?php echo date("Y-m-d", strtotime($item->updated)); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">내용</label>

                                <div class="col-sm-11 sg-item-content">
                                    <?php echo $item->content ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <?php
                        if ($item->isdeprecated) {
                            ?>
                            <a class="btn btn-danger pull-right"
                               href="<?= site_url('notice/change_isdeprecated?noticeid=' . $item->_noticeid) . '&isdeprecated=false' ?>">
                                <i class="fa fa-credit-card"></i> 살리기
                            </a>
                            <?php
                        } else {
                            ?>
                            <a class="btn btn-success pull-right"
                               href="<?= site_url('notice/change_isdeprecated?noticeid=' . $item->_noticeid) . '&isdeprecated=true' ?>">
                                <i class="fa fa-credit-card"></i> 숨기기
                            </a>

                            <?php
                        }
                        ?>

                        <a class="btn btn-warning pull-right" style="margin-right: 5px;"
                           href="<?= site_url('notice/update?noticeid=' . $item->_noticeid) ?>">
                            <i class="fa fa-file-excel-o"></i>수정하기
                        </a>
                        <a class="btn btn-primary pull-right" style="margin-right: 5px;"
                           href="<?= site_url('notice/index') ?>">
                            <i class="fa fa-download"></i>목록보기
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>