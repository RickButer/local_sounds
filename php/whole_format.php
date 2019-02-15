<?php

require_once 'Unirest.php';

$word = $_GET['word'];

$response = Unirest\Request::get('https://giphy.p.rapidapi.com/v1/gifs/search?limit=10&q=' . $word . '&api_key=dc6zaTOxFJmzC',
  array(
    "X-RapidAPI-Key" => "3d43e7276bmsh3db28552be41de1p16f73djsn5360e28fd3c6"
  )
);
//var_dump($response -> raw_body);

$object = json_decode($response -> raw_body);

// var_dump($object -> data[0] -> embed_url);
//echo '<a href="' . $object -> data[0] -> embed_url . '"> LINK </a>';
// $HetIsDeEersteKeer = true;

  foreach($object -> data as $row){
     echo $row -> images -> original -> url;
  }
  ?>