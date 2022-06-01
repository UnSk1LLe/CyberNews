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


// Get the modal
var modal1 = document.getElementById("myModalImg");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg1 = document.getElementById("img01");
var captionText = document.getElementById("captionImg");
img.onclick = function(){
  modal1.style.display = "block";
  modalImg1.src = this.src;
  captionImgText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeImg")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal1.style.display = "none";
}

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
