function initialize(){
	var geo = new google.maps.Geocoder();
	var latLng = 'placeholder';
	var addressA = document.getElementById("locationa").value;
	var addressB = document.getElementById("locationb").value;
	var locations = [genLatLng(addressA), genLatLng(addressB)];
}

function genLatLng(address){
	geocoder.geocode( { address : address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      latLng = results[0].geometry.location;
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
    return latLng;
}

function getLatLng(){
	return locations;
}

