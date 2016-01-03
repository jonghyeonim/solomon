<div class="content-wrapper">
    <section class="content-header">
        <h1>
            공지사항 작성
            <small></small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form class="form-horizontal" enctype="multipart/form-data"
                          action="<?= site_url('/API/upload/upload_item') ?>" method="post" id="frm">
                        <input type="hidden" name="dirkeycode" id="dirkeycode" value="notice">
                        <input type="hidden" name="dir_name" id="sg-create-date"
                               value="<?php echo date("Y-m-d") . '_' . date("h:i:sa"); ?>"/>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="title" class="col-sm-1 control-label">제목</label>

                                <div class="col-sm-11">
                                    <input type="text" name="title" class="form-control"
                                           value="<?php if (isset($data->title)) echo $data->title ?>"
                                           id="title" placeholder="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-1 control-label">분류</label>

                                <div class="col-sm-11">
                                    <select class="form-control select2" name="category"
                                            value="<?php if (isset($data->for_categoryid)) echo $data->for_categoryid ?>">
                                        <?php
                                        foreach ($categories as $item) {
                                            ?>
                                            <option
                                                value="<?php echo $item->_categoryid ?>"><?php echo $item->label ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">내용</label>

                                <div class="col-sm-11">
                                    <textarea name="content" id="summernote">
                                        <?php if (isset($data->content)) echo $data->content ?>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="#" id="ng-submit" class="btn btn-primary pull-right">글쓰기</a>
                            <!--<button type="submit" id="ng-submit" class="btn btn-primary pull-right">글쓰기</button>-->
                            <a href="<?= site_url('/notice/index') ?>" class="btn btn-default pull-right"
                               style="margin-right: 10px;">뒤로가기</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
