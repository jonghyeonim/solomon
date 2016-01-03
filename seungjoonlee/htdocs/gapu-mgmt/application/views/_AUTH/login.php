<div class="login-box">
    <div class="login-logo">
        <a href="<?=site_url('/home/index')?>"><b>SOMETHING-GOODS</b></a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">관리자페이지입니다.</p>

        <form action="<?=site_url('/auth/login')?>" method="post">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">로그인</button>
                </div>
                <div class="col-xs-12 btn-join">
                    <a href="<?=site_url('auth/join')?>" class="btn btn-default btn-block btn-flat">회원가입</a>
                </div>
            </div>
        </form>
    </div>
</div>