/**
 * Created by Руслан on 30.08.2016.
 */
function loadScript(src,callback){

    var script = document.createElement("script");
    script.type = "text/javascript";
    if(callback)script.onload=callback;
    document.getElementsByTagName("head")[0].appendChild(script);
    script.src = src;
}

loadScript('http://maps.googleapis.com/maps/api/js?key=AIzaSyBvpJoXCjk0a7mhaVzWVIGL9WyITxFtnp0&callback=initMap',
    function(){console.log('google-loader has been loaded, but not the maps-API ');});

var kiev, odessa, markerOdessa, markerKiev;
function initMap() {
    var mapStyle = [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
    odessa = new google.maps.Map(document.getElementById('map-odessa'), {
        center: {lat: 46.471610, lng: 30.736011},
        zoom: 16,
        styles: mapStyle
    });

    kiev = new google.maps.Map(document.getElementById('map-kiev'), {
        center: {lat: 50.393920, lng: 30.478775},
        zoom: 16,
        styles: mapStyle
    });

    var markerOdessa = new google.maps.Marker({
        position: {lat: 46.471610, lng: 30.736011},
        map: odessa,
        icon: "/wp-content/themes/Vela/img/marker.png",
        color: '#fff'
    });

    var markerKiev = new google.maps.Marker({
        position: {lat: 50.393920, lng: 30.478775},
        map: kiev,
        icon: "/wp-content/themes/Vela/img/marker.png"
    });

}



$('.map__btn__od').click(function (e){
    if($(".map__btn__od").hasClass("active")){
        e.preventDefault();
        return false;
    }
    $(".map__btn__ki.active").removeClass("active");
    $(this).addClass('active');


});
$('.map__btn__ki').click(function (e){
    if($(".map__btn__ki").hasClass("active")){
        e.preventDefault();
        return false;
    }
    $(".map__btn__od.active").removeClass("active");
    $(this).addClass('active');
});

