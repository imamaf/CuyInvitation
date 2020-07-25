var latt;
var lngg;
var locName;

function setCoords(latt,lngg){
  this.latt = latt;
  this.lngg = lngg;
  this.locName = locName;
}
function initMap() {
  // The location of Uluru
  var loc = {lat: latt, lng: lngg};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: loc});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: loc, map: map});
}