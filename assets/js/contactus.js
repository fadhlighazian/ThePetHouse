  // 
  $('#contact-mail').hide();
  $('#contact-mailClick').removeClass("active");

  $('#contact-map').show();
  $("#contact-mapClick").addClass("active");

// contact page toogles
$("#contact-mapClick").click(function () {
  $('#contact-mail').hide();
  $('#contact-mailClick').removeClass("active");

  $('#contact-map').show();
  $("#contact-mapClick").addClass("active");
});


$("#contact-mailClick").click(function () {
  $('#contact-map').hide();
  $('#contact-mapClick').removeClass("active");


  $('#contact-mail').show();
  $("#contact-mailClick").addClass("active");
});
//google map
var map;
function initialize() {
  var mapOptions = {
    zoom: 15,
    center: new google.maps.LatLng(-6.2372383, 106.62280039999996),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map_canvas'),
      mapOptions);
}
google.maps.event.addDomListener(window, 'load', initialize);