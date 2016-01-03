$(document).ready(function () {
    var page = 1;
    var per_page = 15;
    var last_page = -1;
    var total_count = -1;
    var processing = false;
    var ajax_loader = $('.ajax-loader');

    get_items(page, per_page);

    function get_items(page, perPage) {
        var api = '/GAPU/API/notice/get_items?page=' + page + '&per_page=' + perPage;

        ajax_loader.show();
        processing = true;

        getJson(api, {},
            function (data) {
                console.log(data);
                ajax_loader.hide();
                processing = false;

                page = data.page;
                per_page = data.per_page;
                last_page = data.last_page;
                total_count = data.total_count;

                $('.gapu-content').append(data.data);

                $('.notice-item').click(function (e) {
                    e.preventDefault();
                });
            }, function (arg) {
                console.log('error!!: ' + arg);
            }, 'json');
    }

    $(window).scroll(function () {
        if ($(window).scrollTop() >= ($(document).height() - $(window).height()) * 0.8) {
            if (!processing && page < last_page) {
                get_items(++page, per_page);
            }
        }
    });

    // content open
    $("body").on("click", '.notice-item', function() {
       $(this).find('.notice-content').slideToggle();
    });
});