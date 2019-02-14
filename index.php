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
      <div class="col giffy_title"><span id="g">g</span><span id="i">i </span><span id="f">f </span><span id="ff">f
        </span><span id="y">y</span>
      </div>
    </div>
    <div class="row second_row">
      <div class="col-8 search_box">
      
          <input name="word" id="searchbar" type="search" value="" placeholder="find your giffy!" autofocus> 
      </div>
    </div>
    <div class="row third_row">
      <div class="col-12 button_box"><button type="button" class="" id="button">go!</button></div>
    </div>
    <div class="row">
      <div class="col-12 img_box "><img id="image" /></div>
    </div>
    <div class="row">
      <div class="col-2 black"></div>
      <div class="col-8 button_holder">
        <div id="Rick">
          <div class="font_family">randomize!</div>
        </div>
      </div>
      <div class="col-2 black"></div>
    </div>
  </div>
  <script src="js/main.js"></script>
  <script src="js/word_list.js"></script>
</body>

</html>