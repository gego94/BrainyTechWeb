
function initMap() {
	var elena = {lat: -37.1, lng: -12.283};
  	var map = new google.maps.Map(
	    document.getElementById('map'), {zoom: 10, center: elena});
  	var marker = new google.maps.Marker({position: elena, map: map});
}