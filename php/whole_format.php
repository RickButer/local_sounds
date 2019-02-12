<?php
$response = Unirest\Request::get("https://giphy.p.rapidapi.com/v1/gifs/search?limit=11&q=cat&api_key=dc6zaTOxFJmzC",
array(
  "X-RapidAPI-Key" => "3d43e7276bmsh3db28552be41de1p16f73djsn5360e28fd3c6"
)
);
    //var_dump($response -> raw_body);

    $object = json_decode($response -> raw_body);

    //var_dump($object -> data[0] -> embed_url);

   echo '<a href="' . $object -> data[0] -> embed_url . '"> LINK </a>';
  foreach($object -> data as $catInfo){
    echo '<a href="' . $catInfo -> embed_url . '"> LINK </a>';
    echo "<br>";
  }

  echo

  '<div class="whitespace"></div>' . 
  '<div class="container my_container">' . 
    '<div class="row d-flex my_row">' .
      '<div class="col-md-3 my_col debug">' .
        '<p>Giffy</p>' .
      '</div>' .
      '<div class="col-md-9 my_col_search debug">' .
        '<input id="searchbar" type="search" placeholder="find your giffy.......">' .
      '</div>' .
    '</div>' .
  '</div>' .
  '<div class="container">' .
    '<div class="row debug">' .
      '<div class="col-md-2 debug">' .
          '<div class="col link_10 debug"></div>' .
          '<div class="col link_10 debug"></div>' .
          '<div class="col link_10 debug"></div>' .
          '<div class="col link_10 debug"></div>' .
          '<div class="col link_10 debug"></div>' .
          '<div class="col link_10 debug"></div>' .
          '<div class="col link_10 debug"></div>' .
          '<div class="col link_10 debug"></div>' .
          '<div class="col link_10 debug"></div>' .
          '<div class="col link_10 debug"></div>' .
      '</div>' .
      '<div class="col-md-10 gif_screen debug"></div>' .
    '</div>' .
  '</div>';
  ?>