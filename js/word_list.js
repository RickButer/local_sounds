var word_list  = [
    "monkey",
    "donkey",
    "cat",
    "laser",
    "laptop",
    "quit",
    "shock",
    "surprised",
    "phone",
    "apple",
    "pear",
    "banana",
    "minion",
    "headphones",
    "bag",
    "weed",
    "cigarettes",
    "mouse",
    "pig",
    "table",
    "sex",
    "sexy",
    "paper",
    "party",
    "church",
    "lamp",
    "lion",
    "cheetah",
    "rat",
    "dog",
    "wolf",
    "elephant",
    "glass",
    "mug",
    "beer",
    "whine",
    "wine",
    "wodka",
    "tequila",
    "whiskey",
    "tree",
    "flower",
    "bee",
    "iphone",
    "samsung",
    "girl",
    "bikini",
    "hair",
    "nose",
    "ear",
    "eye",
    "mouth",
    "lips",
    "tong",
    "throath",
    "feet",
    "hand",
    "boobs",
    "stomach",
    "wave",
    "beach",
    "thai",
    "japanese",
    "pokemon",
    "chinese",
    "crazy",
    "coffee",
    "tea",
    "crisps",
    "pizza",
    "slap",
    "smack",
    "hit",
    "car",
    "truck",
    "airplane",
    "chopper",
    "jet",
    "pie",
    "strawberry",
    "melon",
    "indian",
    "german",
    "french",
    "dutch",
    "tulips",
    "roses",
    "belgium",
    "spain",
    "fish",
    "crab",
    "spongebob",
    "startrek",
    "starwars",
    "sardines",
    "broccoli",
    "peanuts",
    "lick",
    "back",
    "knee",
    "toe",
    "hotel",
    "flat",
    "condo",
    "hyper",
    "xtc",
    "drugs",
    "ketamine",
    "cocaine",
    "heroin",
    "mdma",
    "dmt",
    "molly",
    "prostitute",
    "carpet",
    "wild",
    "tame",
    "motorbike",
    "bycicle",
    "australia",
    "frenchfries",
    "water",
    "lazy",
    "adhd",
    "smint",
    "smell",
    "monopoly",
    "chess",
    "fun",
    "guitar",
    "brick",
    "18",
    "topless",
    "fat",
    "watch",
    "necklace",
    "hair",
    "fatty",
    "mcdonalds",
    "burgerking",
    "fastfood",
    "healthy", 
  ];



  function getRandomWord() { 
    var random_word = word_list[Math.floor(Math.random() * word_list.length)];
    
    console.log(random_word);
    return random_word;
  }

  loadDoc(getRandomWord()); //ajax functie wordt uitgevoerd met de functie die het random woord kiest

  function loadDoc(word) { //functie om een woord via AJAX te sturen naar de server om een gifje op te roepen
    var xhttp = new XMLHttpRequest(); //maakt een nieuwe class aan
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {//kijkt of readystate == done en of ik het ok heb voor de pagina. 

        document.getElementById("image").src = this.responseText; // zorgt ervoor dat de source de url is van het opgeroepen gifje
      }
    };

    xhttp.open("GET", "php/whole_format.php?word=" + word, true);// maakt een get request met het woord in de url

    xhttp.send();
  }

  document.getElementById('button').addEventListener('click', function(){//zet een click event op de knop  die de AJAX functie uitvoert met het woord uit de value
    var input = document.getElementById('searchbar').value; 
    loadDoc(input); // stopt de value van de searchbar in de variable input
  });

  document.getElementById('searchbar').addEventListener('keypress', function(event) {
    if (event.keyCode == 13) {
      var input = document.getElementById('searchbar').value;
      loadDoc(input);
    }
});