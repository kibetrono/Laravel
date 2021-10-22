<?php?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 99%;
  position: relative;
  margin: auto;
 
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 2.5s;
}

@-webkit-keyframes fade {
  from {opacity: .5} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .5} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="/imgsrc/books.png" style="width:100%;height:350px;">
  <div style="color:black;" class="text"></div>
</div>

<div class="mySlides fade">
  <img src="/imgsrc/book2.png" style="width:100%;height:350px;">
  <div style="color:black;" class="text"></div>
</div>

<div class="mySlides fade">
  <img src="/imgsrc/book3.png" style="width:100%;height:350px;">
  <div style="color:black;" class="text"></div>
</div>

<div class="mySlides fade">
  <img src="/imgsrc/David.png" style="width:100%;height:350px;">
  <div style="color:black;" class="text"></div>
</div>

<div class="mySlides fade">
  <img src="/imgsrc/Caesar.png" style="width:100%;height:350px;">
  <div style="color:black;" class="text"></div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 

</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2500); // Change image every 2 seconds
}

</script>

</body>
</html> 
