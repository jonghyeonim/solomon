<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">MANAGEMENT</li>
            <li><a href="<?= site_url('home/index') ?>"><i class="fa fa-database"></i> <span>DASHBOARD</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i> <span>공지사항</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= site_url('notice/index') ?>"><i class="fa fa-circle-o"></i>공지사항</a></li>
                    <li><a href="<?= site_url('notice_category/index') ?>"><i class="fa fa-circle-o"></i> 카테고리</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-camera"></i> <span>채용정보</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= site_url('recruit/index') ?>"><i class="fa fa-circle-o"></i>채용정보</a></li>
                    <li><a href="<?= site_url('recruit_category/index') ?>"><i class="fa fa-circle-o"></i>카테고리</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= site_url('user/index') ?>">
                    <i class="fa fa-users"></i> <span>USER</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
