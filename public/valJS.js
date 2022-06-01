// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

/*let rg = document.getElementById('logIn')
rg.style.fontSize="14px"
rg.style.padding="1%"
rg.style.color="cyan"*/

var mainRef = document.querySelector("#mainRef");
mainRef.style.marginLeft = "40px";

var search = document.querySelector("#searchField");
search.style.marginLeft = "120px";

var searchB = document.getElementById('searchButton');

var input = document.getElementById("password");
var warning = document.getElementById("warn");
warn.style.display = "none";
warn.innerHTML = "CapsLock включен!";
warn.style.color = "orange";
warning.style.marginLeft = "17px"
input.addEventListener("keyup", function(event) {
  if (event.getModifierState("CapsLock")) {
    warning.style.display = "block";
  } else {
    warning.style.display = "none"
  }
})

function changeColor(st) {
  if(st == 1) {
    document.getElementById("scrollTop").style.backgroundColor = "lightgrey"
    document.getElementById("scrollTop").style.color = "grey"
  }
    else {
      document.getElementById("scrollTop").style.backgroundColor = "grey"
      document.getElementById("scrollTop").style.color = "white"

    }
}

scrlTop = document.getElementById("scrollTop");
scrlTop.style.display = "none";
scrlTop.style.position = "fixed";
scrlTop.style.bottom = "30px";
scrlTop.style.right = "30px";
scrlTop.style.zIndex = "99";
scrlTop.style.border = "none";
scrlTop.style.outline = "none"
scrlTop.style.backgroundColor = "grey";
scrlTop.style.color = "white";
scrlTop.style.cursor = "pointer";
scrlTop.style.padding = "15px";
scrlTop.style.borderRadius = "15px";
scrlTop.style.fontSize = "18px";
scrlTop.innerHTML = "▲";
scrlTop.style.width = "50px";
scrlTop.style.textAlign = "center";

$("tldot").hide();
$("img").hide();
$("#tlgrid").hide()
$("#searchButton").show();
$("#tlgrid").show(1000)
$("img").show(1800);

$(document).ready(function(){
  $("#tline").slideDown(3000);
  $("tldot").slideDown(3500);
});




window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    scrlTop.style.display = "block";
  } else {
    scrlTop.style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


