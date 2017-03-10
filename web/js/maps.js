/* Google Maps ------------------------- */
function init() {
    var latlng = new google.maps.LatLng(-22.42051,-43.7527575);
    var opcoes = {
        zoom: 16,
        center: latlng,
        scrollwheel: false,
        scaleControl: false,
        disableDefaultUI: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("mapa"), opcoes);
//    var marcador = "imagens/marker.png";
//    var marker = new google.maps.Marker({
//        map: map,
//        animation: google.maps.Animation.DROP,
//        icon: marcador,
//        position: new google.maps.LatLng(-22.419959, -43.755660)
//    });
//    var conteudo = 'Construtora MacEng';
//    var infowindow = new google.maps.InfoWindow({
//        content: conteudo
//    });
//    google.maps.event.addListener(marker, 'click', function () {
//        infowindow.open(map, marker);
//    });
}
init();