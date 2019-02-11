var demo = document.getElementById("demo");

var lat = position.coords.latitude;
var long = position.coords.longitude;

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    demo.innerHTML = "Geolocation is not supported by this browser.";
  }
}


function showPosition(position) {
  demo.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude; 
}


// coords.latitude	The latitude as a decimal number (always returned)
// coords.longitude	The longitude as a decimal number (always returned)
// coords.accuracy	The accuracy of position (always returned)
// coords.altitude	The altitude in meters above the mean sea level (returned if available)
// coords.altitudeAccuracy	The altitude accuracy of position (returned if available)
// coords.heading	The heading as degrees clockwise from North (returned if available)
// coords.speed	The speed in meters per second (returned if available)
// timestamp	The date/time of the response (returned if available)


///////authorisation scope

app.get('/login', function(req, res) {
    var scopes = 'user-read-private user-read-email';
    res.redirect('https://accounts.spotify.com/authorize' +
      '?response_type=code' +
      '&client_id=' + my_client_id +
      (scopes ? '&scope=' + encodeURIComponent(scopes) : '') +
      '&redirect_uri=' + encodeURIComponent(redirect_uri));
    });