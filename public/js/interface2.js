// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
    document.getElementById("tabs").style.position = "fixed";
    document.getElementById("tabs").style.width = "100%";
    document.getElementById("tabs").style.margin = "-110px 0px 0px 0px";
    document.getElementById("tabs").style.background= "hsl(0, 0%, 20%)";
    document.getElementById("tabs").style.color="#fff";
    document.getElementById("tabs").style.borderRadius="20px 20px 0px 0px";

  } 
  
  else {
    document.getElementById("tabs").style.margin = "2px 0px 0px 0px";
    document.getElementById("tabs").style.background= "#192666";
    document.getElementById("content").style.margin= "20px 0px 0px 0px";
    document.getElementById("tabs").style.borderRadius="0px";


  }
}
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}