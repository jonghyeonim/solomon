<section class="gapu-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 gapu-container">
                <div class="gapu-title">
                    문의메일
                </div>
                <div class="gapu-content" style="text-align: left; margin-bottom: 15px">
                    <div class="content-title text-center">
                        ALWAYS <br>
                        WELCOME
                        <p>—</p>
                    </div>
                    <div class="content-detail text-center">
                        가푸게임즈는 언제나 열린 마음으로 여러분들의 소리를 듣겠습니다. <br>
                        제휴, 또는 투자를 원하시는 분들은 언제나 연락주세. <br>
                        감사합니다.
                    </div>
                    <form id="form-mail" class="form-horizontal" enctype="multipart/form-data"
                          action="<?= site_url('/contact/submit_mail') ?>" method="post">

                        <div class="box-body">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="이름">
                            </div>
                            <div class="form-group">
                                <input type="tel" name="number" placeholder="연락처">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="이메일">
                            </div>
                            <div class="form-group">
                                <textarea class="form-item form-content" name="content"
                                          placeholder="문의 사항을 10자 이상 작성해 주세요"></textarea>
                            </div>

                        </div>
                </div>
                <div class="text-center">
                    <input id="form-submit" type="button" class="btn btn-primary" value="제출"/>
                </div>

                </form>
            </div>
            <!--                <div class="ajax-loader-container text-center">-->
            <!--                    <img class="ajax-loader" src="/static/img/loader.gif"/>-->
            <!--                </div>-->
        </div>
    </div>
    </div>
</section>