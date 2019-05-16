window.onscroll = function() {myFunction()};

var header = document.getElementById("header");
var opague = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > opague) {
    header.classList.add("opague");
  } else {
    header.classList.remove("opague");
  }
}

/*
function menu() {
    
}
*/
