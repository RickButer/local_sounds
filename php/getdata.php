<?php
$latitude = $_GET['lat'];
$longitude = $_GET['long'];

$url = "https://api.spotify.com/v1/search?q=bob%20dylan&type=track%2Cartist&limit=10&offset=5";
$json = file_get_contents($url);

?>