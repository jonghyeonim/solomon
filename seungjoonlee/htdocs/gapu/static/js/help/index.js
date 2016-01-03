$(document).ready(function () {
    function initialize() {
        var myLatlng = new google.maps.LatLng(35.873199,128.625025);
        var mapOptions = {
            zoom: 16,
            center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('gapu-map'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'GAPU!'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
});