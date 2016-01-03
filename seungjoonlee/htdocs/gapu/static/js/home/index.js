$(document).ready(function () {
    var containerHeight = $('.body-container').outerHeight();
    var mainItemHeight = $('.item-container').outerHeight();
    var itemContainer = $('.main-content');

    itemContainer.css('margin-top', (containerHeight - 81 - mainItemHeight) / 2);

})