<div class="content-wrapper">
    <section class="content-header">
        <h1>
            공지사항 분류 작성
            <small></small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form class="form-horizontal" enctype="multipart/form-data"
                          action="<?= site_url('/notice_category/submit') ?>" method="post" id="frm">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title" class="col-sm-1 control-label">라벨</label>
                                <div class="col-sm-11">
                                    <input type="text" name="label" class="form-control"
                                           value="<?php if (isset($data->label)) echo $data->label ?>"
                                           id="label" placeholder="label">
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" id="ng-submit" class="btn btn-primary pull-right">글쓰기</button>
                            <a href="<?= site_url('/notice_category/index') ?>" class="btn btn-default pull-right"
                               style="margin-right: 10px;">뒤로가기</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>