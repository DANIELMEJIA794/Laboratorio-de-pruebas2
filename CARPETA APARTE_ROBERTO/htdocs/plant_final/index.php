<?php
include ("encabezado.php");
include ("configuracion.php");
?>

<h2><font face="Helvetica"> Visita nuestros mejores destinos...</font></h2>
<div class="center">
<div class="slideshow-container">

<div class="mySlides fade">
   <a href="departamento.php?departamento=cusco"><img src="imagenes/cusco.jpg" width="1500" height="600"></a>
  <div class="text"><b>MACHU PICCHU</b></div>
</div>

<div class="mySlides fade">
  <a href="departamento.php?departamento=huanuco"><img src="imagenes/huanuco.jpg" width="1500" height="600"></a>
  <div class="text"><b>LA BELLA DURMIENTE</b></div>
</div>

<div class="mySlides fade">
  <a href="departamento.php?departamento=arequipa"><img src="imagenes/arequipa.jpg" width="1500" height="600"></a>
  <div class="text"><b>EL CAÑON DEL COLCA</b></div>
</div>

<div class="mySlides fade">
  <a href="departamento.php?departamento=amazonas"><img src="imagenes/amazonas.jpg" width="1500" height="600"></a>
  <div class="text"><b>CATARATA DE GOCTA</b></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<br>
<img border="0" src="imagenes/hoteles.jpg" width="180">
<br>
<table width="100%">
  <tr>

<?php
$sql="select * FROM destinos order by id DESC Limit 0,5 ";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0) {
  while($row=mysqli_fetch_assoc($result)) {
    echo '<td width="120">';
    echo '<br>'; 
    echo '<a href="main.php?id='.$row["id"].'"><p align="center"><img src="imagenes/'.$row["caratula_hotel"].'"height="150"><br>';
    echo '<b><p align="center"><font face="Arial" size="4">'.$row["nombre_hotel"].'</font></b>';
    echo '<br>';
    echo '<font face="Arial" size="3">'.$row["nombre_lugar"].'</font></p></a>';
    echo '<br>';
    echo '</td>';
  }
}
?>
      </tr>
    </table>
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
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>

<?php 
include("piedepagina.php");
?>