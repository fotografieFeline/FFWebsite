//window.onscroll = function() {scrollFunction()};

/*function scrollFunction() {
    let element = document.getElementsByClassName("header");
    console.log(element);
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        element.style.height = "30px";
    } else{
        element.style.height = "90px";
    }
}*/

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
