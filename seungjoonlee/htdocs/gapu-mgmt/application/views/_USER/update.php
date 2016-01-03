<div class="content-wrapper">
    <section class="content-header">
        <h1>
            유저
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form class="form-horizontal" enctype="multipart/form-data"
                          action="<?= site_url('/user/submit_update') ?>" method="post" id="frm">
                        <input type="hidden" id="sg-create-userid" name="user" value="<?php echo $item->_userid ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title" class="col-sm-1 control-label">id</label>

                                <div class="col-sm-11 sg-item-content">
                                    <?php echo $item->_userid ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">이름</label>

                                <div class="col-sm-11 sg-item-content">
                                    <?php echo $item->username ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">메일</label>

                                <div class="col-sm-11 sg-item-content">
                                    <?php echo $item->email ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">프로필(URL)</label>

                                <div class="col-sm-11 sg-item-content">
                                    <?php echo $item->profile_url ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">관리자</label>

                                <div class="col-sm-11 sg-item-content">
                                    <?php
                                    if ($item->is_admin) {
                                        ?>
                                        O
                                        <?php
                                    } else {
                                        ?>
                                        X
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">로그인</label>

                                <div class="col-sm-11 sg-item-content">
                                    <?php echo $item->logined ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">수정일</label>

                                <div class="col-sm-11 sg-item-content">
                                    <?php echo $item->updated ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">생성일</label>

                                <div class="col-sm-11 sg-item-content">
                                    <?php echo $item->created ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">페이스북</label>

                                <div class="col-sm-11 sg-item-content">
                                    <input type="text" class="form-control" name="facebook" id="facebook" value="<?php if(isset($item->facebook) && strlen($item->facebook) > 0) echo $item->facebook;?>" placeholder="http://facebook.com/dongjin20"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">인스타그램</label>

                                <div class="col-sm-11 sg-item-content">
                                    <input type="text" class="form-control" name="instagram" id="instagram" value="<?php if(isset($item->instagram) && strlen($item->instagram) > 0) echo $item->instagram;?>" placeholder="http://instagram.com/heydj_"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">블로그</label>

                                <div class="col-sm-11 sg-item-content">
                                    <input type="text" class="form-control" name="blog" id="blog" value="<?php if(isset($item->blog) && strlen($item->blog) > 0) echo $item->blog;?>" placeholder="http://blog.naver.com/kdongj20"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">핀터레스트</label>

                                <div class="col-sm-11 sg-item-content">
                                    <input type="text" class="form-control" name="pinterest" id="pinterest" value="<?php if(isset($item->pinterest) && strlen($item->pinterest) > 0) echo $item->pinterest;?>" placeholder="http://pinterest.com/dongjin20"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="summary" class="col-sm-1 control-label">주소</label>

                                <div class="col-sm-11 sg-item-content">
                                    <input type="text" class="form-control" name="address" id="address" value="<?php if(isset($item->address) && strlen($item->address) > 0) echo $item->address;?>" placeholder="경북 경산시 정평동 현대APT 107/1801"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <a href="#" id="ng-submit" class="btn btn-primary pull-right">수정하기</a>
                        <?php
                        if ($item->isdeprecated) {
                            ?>
                            <a class="btn btn-danger pull-right" style="margin-right: 5px;"
                               href="<?= site_url('user/change_isdeprecated?userid=' . $item->_userid) . '&isdeprecated=false' ?>">
                                <i class="fa fa-credit-card"></i> 살리기
                            </a>
                            <?php
                        } else {
                            ?>
                            <a class="btn btn-success pull-right" style="margin-right: 5px;"
                               href="<?= site_url('user/change_isdeprecated?userid=' . $item->_userid) . '&isdeprecated=true' ?>">
                                <i class="fa fa-credit-card"></i> 삭제하기
                            </a>

                            <?php
                        }
                        ?>

                        <?php
                        if ($item->is_admin) {
                            ?>
                            <a class="btn btn-warning pull-right" style="margin-right: 5px;"
                               href="<?= site_url('user/change_admin?userid='.$item->_userid).'&isadmin=false' ?>">
                                <i class="fa fa-file-excel-o"></i> 관리자 박탈
                            </a>
                            <?php
                        } else {
                            ?>
                            <a class="btn btn-warning pull-right" style="margin-right: 5px;"
                               href="<?= site_url('user/change_admin?userid='.$item->_userid).'&isadmin=true' ?>">
                                <i class="fa fa-file-excel-o"></i> 관리자 부여
                            </a>

                            <?php
                        }
                        ?>
                        <a class="btn btn-primary pull-right" style="margin-right: 5px;"
                           href="<?= site_url('user/detail?userid='.$item->_userid) ?>">
                            <i class="fa fa-download"></i>뒤로가기
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>