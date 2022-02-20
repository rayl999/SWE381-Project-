var map;
var geocoder;

function loadMap() {
	var pune = {lat: 24.713552, lng: 46.675297};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: pune
    });

    var marker = new google.maps.Marker({
      position: pune,
      map: map
    });

    var cdata = JSON.parse(document.getElementById('data').innerHTML);
    geocoder = new google.maps.Geocoder();  
    codeAddress(cdata);

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllColleges(allData)
}

	
