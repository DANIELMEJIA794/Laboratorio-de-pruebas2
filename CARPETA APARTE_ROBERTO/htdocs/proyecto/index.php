<?php
include ("cabeza.php");
?>
<h2>Visita nuestros mejores destinos</h2>
<div class="center">
<div class="slideshow-container">

<div class="mySlides fade">
   <a href=""><img src="cuzco.jpeg" width="1500" height="600"></a>
  <div class="text"><b>MACHU PICCHU</b></div>
</div>

<div class="mySlides fade">
  <a href=""><img src="bella.jpeg" width="1500" height="600"></a>
  <div class="text"><b>LA BELLA DURMIENTE</b></div>
</div>

<div class="mySlides fade">
  <a href=""><img src="catarata.jpeg" width="1500" height="600"></a>
  <div class="text"><b>EL CAÑON DEL COLCA</b></div>
</div>

</div>
<br>

<div style="text-align:center">
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
