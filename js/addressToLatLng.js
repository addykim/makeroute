function initialize(){
	var geo = new google.maps.Geocoder();
	var lat;
	var lng;
	var addressA = '6401 Maple Avenue, Dallas, TX, United States'
	var addressB = document.getElementById("locationb").value;
}

function getLatLng(callback){
	geo.geocode( { 'address' : addressA}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      var loc=[];
      loc[0] = results[0].geometry.location.lat();
      loc[1] = results[0].geometry.location.lng();
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }

    callback(loc);

}