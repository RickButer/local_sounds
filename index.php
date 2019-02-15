<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Sigmar+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Overpass" rel="stylesheet">
  <title>Giffy</title>
</head>

<body>
  <div class="container">
    <div class="row first_row">
      <div class="col-s-0 col-md-3"></div>
      <div class="col col-md-6 giffy_title"><span id="g">g</span><span id="i">i </span><span id="f">f </span><span id="ff">f
        </span><span id="y">y</span>
      </div>
      <div class="col-s-0 col-md-3"></div>
    </div>
    <div class="row second_row">
      <div class="col-s-0 col-md-3"></div>
      <div class="col-6 col-md-3  search_box">
        <input name="word" id="searchbar" type="search" value="" placeholder="find your giffy ..." autofocus>
      </div>
      <div class="col-6 col-md-3 button_box">
        <div id="bg"></div><button type="button" class="" id="button">go!</button>
      </div>
      <div class="col-s-0 col-md-3"></div>
    </div>
    
    <div class="row">
      <div class="col-2 col-md-4 black"></div>
      <div class="col-8 col-md-4 button_holder">
        <div id="Rick">
          <div class="font_family">randomize!</div>
        </div>
      </div>
      <div class="col-2 black"></div>
    </div>
    <div class="row">
      <div class="col-s-0 col-md-2"></div>
      <div class="col-s-12 col-md-8 col-l-8 img_box "><img id="image" /></div>
    </div>
  </div>
  <script src="js/main.js"></script>
  <script src="js/word_list.js"></script>
</body>

</html>