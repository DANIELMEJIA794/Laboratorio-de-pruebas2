<html>
	<head>
	<meta charset="utf-8"/>
	<meta name="description" content="Universidad Nacional Mayor San Marcos"/>
	<meta name="keywords" content="univesidad, Peru, university"/>
	<meta name="author" content="Celso Gonzales" />
	<meta name="copyright" content="Propietario del copyright" />
	<meta name="robots" content="index"/>
	<meta http-equiv="cache-control" content="no-cache"/>
	<meta http-equiv="expires" content="300000"/>
	<meta http-equiv="expires" content="Sat, 07 Feb 2016 00:00:00 GMT"/>
<!--	<meta http-equiv="refresh" content="10; url=http://www.unmsm.edu.pe/"/> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="font-awesome.min.css"> <!-- Tipo de Fuente -->
	<link rel="stylesheet" href="menu.css"> <!-- Tipo de Fuente -->
   <script type="text/javascript" src="menu.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}


.slideshow mySlides fade {
  max-width: 560px;
  max-height: 560px;
  position: center;
  margin: auto;
}
 
/* Slideshow container */
.slideshow-container {
 
  position: relative;
  margin-right: 50px;
  margin-left:50px
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

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
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
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


.logo{
	height:70px;
}

.mySlides img{
	width:100%
}
</style>
   <script type="text/javascript" src="menu.js"></script>
	<title>Trivago</title>
	</head>
	<body bgcolor="white">
	<table cellpadding="0" cellspacing="0">
	<tr width="40%">
	<td>
	<img class="logo" src="trivago.png" >
	</td>
	<td align="right">
	<p><font color="#DF7401" size="5" face="Times new Roman"><strong>Todas las mejores ofertas de las páginas de reservas en un solo lugar</strong></font></p> 
	</td>
	</tr>
	</table>
    <table cellpadding="0" cellspacing="0" width="100%">
	<tr>
	<td><form action="buscar.php" method="post">
	<table  width="100%"valign="middle"><tr><td valign="middle">
	<input type="text" size="60" name="termino" placeholder="inserte su destino">
	<input type="submit" value="Buscar">
</td></tr>
</table>
</form>
</td>
	<td width="800">
	<div class="navbar">
  <a href="">Inicio</a>
  <!-- MENU PELICULA -->
	
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction('1')">Departamentos
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="1">
    <a href="">Huánuco</a>
    <a href="">Chachapoyas</a>
    <a href="">Amazonas</a>
	<a href="">Arequipa</a>
  </div>
</div> 
  <!-- MENU SERIE -->
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction('2')">Ofertas
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="2">
    <a href="">10% de Descuento</a>
    <a href="">30% de Descuento</a>
    <a href="">50% de Descuento</a>
  </div>
</div> 
   <div class="dropdown">
  <button class="dropbtn" onclick="myFunction('3')">Menú
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="3">
    <a href="">Datos personales</a>
    <a href="">Cerrar sesión</a>
    <a href="">Reportes</a>
	<a href="">Ingresar</a>
	</div>
</div> 
</td>
</tr>
</table>