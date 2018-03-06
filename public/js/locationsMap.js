
locations = json.locations;
positions = [];
markers = [];

function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(43.5458062,-80.54936229999996),
        zoom:8,
    };

    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

    for (var i = 0; i < locations.length; i++) {
        console.log(locations[i].name);
        positions[i] = new google.maps.LatLng(locations[i].lat,locations[i].lng);
        markers[i] = new google.maps.Marker({position: positions[i], animation:google.maps.Animation.DROP});
        
        console.log(positions[i]);
        console.log("Marker Position: " + markers[i].getPosition());

        /* markers[i].addListener('click', function() {
            console.log("Location: " + locations[i].name);
            map.setZoom(12);
            var center = new google.maps.LatLng(locations[i].lat,locations[i].lng);
            map.setCenter(center);
            console.log("Marker Position: " + markers[i].getPosition());
            //console.log(locations[i].name + " Position: " + positions[i]);
            
            var infowindow = new google.maps.InfoWindow();

            infowindow.setContent(
                "<p>" + json.locations[i].name + "<br />" + json.locations[i].address + "<br/> <a href='#'>Get Directions</a> </p>"
            );

            infowindow.open(map,markers[i]); 
        }); */
        console.log(positions[0]);

        markers[i].setMap(map);
    }


    markers[0].addListener('click', function() {
        map.setZoom(locations[0].zoom);
        map.setCenter(markers[0].getPosition());

        var infowindow = new google.maps.InfoWindow();

        infowindow.setContent(
            "<p>" + json.locations[0].name + "<br />" + json.locations[0].address + "<br/> <a target='_blank' href='" + json.locations[0].directions + "'>Get Directions</a></p>"
        );
        infowindow.open(map,markers[0]);
        console.log("Marker 0: " + markers[0]);
    });

    markers[1].addListener('click', function() {
        map.setZoom(locations[1].zoom);
        map.setCenter(markers[1].getPosition());

        var infowindow = new google.maps.InfoWindow();

        infowindow.setContent(
            "<p>" + json.locations[1].name + "<br />" + json.locations[1].address + "<br/> <a target='_blank' href='" + json.locations[1].directions + "'>Get Directions</a> </p>"
        );
        infowindow.open(map,markers[1]);
        console.log("Marker 1: " + markers[1]);

    });
    
    markers[2].addListener('click', function() {
        map.setZoom(locations[2].zoom);
        map.setCenter(markers[2].getPosition());

        var infowindow = new google.maps.InfoWindow();

        infowindow.setContent(
            "<p>" + json.locations[2].name + "<br />" + json.locations[2].address + "<br/> <a target='_blank' href='" + json.locations[2].directions + "'>Get Directions</a></p>"
        );
        infowindow.open(map,markers[2]);
        console.log("Marker 2: " + markers[2]);
    });

    markers[3].addListener('click', function() {
        map.setZoom(locations[3].zoom);
        map.setCenter(markers[3].getPosition());

        var infowindow = new google.maps.InfoWindow();

        infowindow.setContent(
            "<p>" + json.locations[3].name + "<br />" + json.locations[3].address + "<br/> <a target='_blank' href='" + json.locations[3].directions + "'>Get Directions</a></p>"
        );
        infowindow.open(map,markers[3]);
        console.log("Marker 3: " + markers[3]);
    });

    markers[4].addListener('click', function() {
        map.setZoom(locations[4].zoom);
        map.setCenter(markers[4].getPosition());

        var infowindow = new google.maps.InfoWindow();

        infowindow.setContent(
            "<p>" + json.locations[4].name + "<br />" + json.locations[4].address + "<br/> <a target='_blank' href='" + json.locations[4].directions + "'>Get Directions</a></p>"
        );
        infowindow.open(map,markers[4]);
        console.log("Marker 4: " + markers[4]);
    });

    markers[5].addListener('click', function() {
        map.setZoom(locations[5].zoom);
        map.setCenter(markers[5].getPosition());

        var infowindow = new google.maps.InfoWindow();

        infowindow.setContent(
            "<p>" + json.locations[5].name + "<br />" + json.locations[5].address + "<br/> <a target='_blank' href='" + json.locations[5].directions + "'>Get Directions</a></p>"
        );
        infowindow.open(map,markers[5]);
        console.log("Marker 5: " + markers[5]);
    });

    markers[6].addListener('click', function() {
        map.setZoom(locations[6].zoom);
        map.setCenter(markers[6].getPosition());

        var infowindow = new google.maps.InfoWindow();

        infowindow.setContent(
            "<p>" + json.locations[6].name + "<br />" + json.locations[6].address + "<br/> <a target='_blank' href='" + json.locations[6].directions + "'>Get Directions</a></p>"
        );
        infowindow.open(map,markers[6]);
        console.log("Marker 6: " + markers[6]);
    });

    markers[7].addListener('click', function() {
        map.setZoom(locations[7].zoom);
        map.setCenter(markers[7].getPosition());

        var infowindow = new google.maps.InfoWindow();

        infowindow.setContent(
            "<p>" + json.locations[7].name + "<br />" + json.locations[7].address + "<br/> <a target='_blank' href='" + json.locations[7].directions + "'>Get Directions</a></p>"
        );
        infowindow.open(map,markers[7]);
        console.log("Marker 7: " + markers[7]);
    });

}


function mapClick(num) {
    google.maps.event.trigger(markers[num], 'click');
}