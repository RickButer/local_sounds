var rick = document.getElementById('Rick');
 rick.addEventListener('click', getRandomColor);

  

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    document.getElementById('Rick').style.backgroundColor = color;
    
    loadDoc(getRandomWord());
    
  }
 
// var word = document.getElementById('word_finder');//opzet voor input van searchbar
// var formvalue = word.word.value;

