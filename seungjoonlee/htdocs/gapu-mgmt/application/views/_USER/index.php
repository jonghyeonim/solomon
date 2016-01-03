<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            회원
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body table-responsive">
                        <table id="data-table" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>이름</th>
                                <th>메일</th>
                                <th>로그인</th>
                                <th>수정일</th>
                                <th>권한</th>
                                <th>삭제하기</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($items as $item) {
                                ?>
                                <tr>
                                    <td><?php echo $item->_userid ?></td>
                                    <td><a href="<?= site_url('/user/detail?userid=' . $item->_userid) ?>">
                                            <?php echo $item->username ?>
                                        </a></td>
                                    <td><?php echo $item->email ?></td>
                                    <td><?php echo date("Y-m-d", strtotime($item->logined)); ?></td>
                                    <td><?php echo date("Y-m-d", strtotime($item->updated)); ?></td>
                                    <td>
                                        <?php
                                        if ($item->is_admin) {
                                            ?>
                                            <a href="<?= site_url('user/change_admin?userid=' . $item->_userid) . '&isadmin=false' ?>"
                                               class="sg-item-survive" style="color: red">
                                                관리자 박탈
                                            </a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href="<?= site_url('user/change_admin?userid=' . $item->_userid . '&isadmin=true') ?>"
                                               class="" >
                                                관리자 부여
                                            </a>

                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($item->isdeprecated) {
                                            ?>
                                            <a href="<?= site_url('user/change_isdeprecated?userid=' . $item->_userid) . '&isdeprecated=false' ?>"
                                               class="sg-item-survive">
                                                살리기
                                            </a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href="<?= site_url('user/change_isdeprecated?userid=' . $item->_userid . '&isdeprecated=true') ?>"
                                               class="sg-item-delete" style="color: red">
                                                숨기기
                                            </a>

                                            <?php
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>