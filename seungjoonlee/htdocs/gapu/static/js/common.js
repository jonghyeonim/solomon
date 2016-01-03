function isIE () {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
}

if (isIE () && isIE () < 9) {
    alert('IE 버전을 업그레이드 해주세요.');
    window.location.href = "https://www.microsoft.com/ko-kr/download/internet-explorer.aspx";
}

    var checkMobile = $("#checkMobile").val();
$(document).ready(function () {
    var footerHeight = $('.footer-container').outerHeight();
    var windowHeight = $(window).height();
    var containerHeight = windowHeight - footerHeight;


    $('.body-container').css('min-height', containerHeight);

    var currentUrl = window.location.href;

    if (currentUrl.indexOf('/home') > 0) {
        //$($('ul.nav li.gapu-menu')[0]).addClass('active');
    } else if (currentUrl.indexOf('/game') > 0) {
        $($('ul.nav li.gapu-menu')[1]).addClass('active');
    }  else if (currentUrl.indexOf('/notice') > 0) {
        $($('ul.nav li.gapu-menu')[2]).addClass('active');
    }  else if (currentUrl.indexOf('/help') > 0) {
        $($('ul.nav li.gapu-menu')[3]).addClass('active');
    } else if (currentUrl.indexOf('/recruit') > 0) {
        $($('ul.nav li.gapu-menu')[4]).addClass('active');
    }

    if (checkMobile == "web") {
        $( ".dropdown" ).mouseover(function() {
            $(this).addClass('open');
        });
        $( ".dropdown" ).mouseleave(function() {
            $(this).removeClass('open');
        });
    }

    // navbar
    var navWidth = $('.container').outerWidth() * 0.33333333;
    $('.navbar-brand').css('width', navWidth);


    $('.m-section-1').click(function () {
        window.location.href = '/GAPU/m/game/sub2';
    });
    $('.m-section-2').click(function () {
        window.location.href = '/GAPU/m/intro/index';
    });
    $('.m-section-3').click(function () {
        window.location.href = '/GAPU/m/game/sub1';
    });
    $('.m-section-4').click(function () {
        window.location.href = '/GAPU/m/notice/index';
    });
    $('.m-section-6').click(function () {
        window.location.href = '/GAPU/m/help/index';
    });
    $('.m-section-5').click(function () {
        window.location.href = '/GAPU/m/game/sub3';
    });
    $('.m-section-7').click(function () {
        window.location.href = '/GAPU/m/recruit/index';
    });
    $('.m-section-8').click(function () {
        window.location.href = '/GAPU/m/help/index';
    });

    // main img hover event
    $('.bg-img').hover(function () {
        var text = $(this).children('a');
        text.css('display', 'inline-block');
        text.show();
    });
    $('.bg-img').mouseleave(function () {
        var text = $(this).children('a');
        text.hide();
    });


    $(window).resize(function() {
        var windowWidth = $(window).width();

        if (windowWidth < 600) {
            var path = window.location.pathname;
            var splittedPath = path.split('/');
            if (splittedPath.length == 3) {
                //window.location.href = 'http://gapugames.com/GAPU/m/home';
            } else {
                //window.location.href = 'http://gapugames.com/GAPU/m/' + splittedPath[2] + '/' + splittedPath[3];
            }
        }
    });


    $(window).load(function() {
        $(".se-pre-con").fadeOut("slow");;
    });

});