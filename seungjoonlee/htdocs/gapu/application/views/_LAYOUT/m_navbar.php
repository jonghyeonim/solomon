<nav class="navbar navbar-default navbar-fixed-top gq-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=site_url('m/home/index')?>">
                <img src="<?=site_url('static/img/gapu-color.png')?>" />
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar gq-navbar-menu">
                <li class="gapu-menu dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        회사소개</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=site_url('m/intro/index')?>">회사 개요</a></li>
                        <li><a href="<?=site_url('m/intro/history')?>">히스토리</a></li>
                    </ul>
                </li>
                <li class="gapu-menu dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        게임목록</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=site_url('m/game/sub1')?>">마우스트랩</a></li>
                        <li><a href="<?=site_url('m/game/sub2')?>">우편왕</a></li>
                        <li><a href="<?=site_url('m/game/sub3')?>">우편왕 for Kakao</a></li>
                    </ul>
                </li>
                <li class="gapu-menu"><a href="<?=site_url('m/notice/index')?>">공지사항</a></li>
                <li class="gapu-menu"><a href="<?=site_url('m/help/index')?>">고객지원</a></li>
                <li class="gapu-menu"><a href="<?=site_url('m/recruit/index')?>">채용정보</a></li>
            </ul>
        </div>
    </div>
</nav>