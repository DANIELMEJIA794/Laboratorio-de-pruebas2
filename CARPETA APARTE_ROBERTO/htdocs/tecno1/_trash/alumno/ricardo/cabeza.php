<html>

<head>
<meta http-equiv="Content-Language" content="es-pe">
<meta http-equiv="Content-Type" content="text/phpl; charset=UTF-8">
<title>Editorial Planeta</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
include ("configuracion.php");

?>

<style>
.navbar {
  overflow: hidden;
  background-color: black;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: red;
}

.show {
  display: block;
}
</style>
<style>
body {
    background-color: white;
  }
  
  h1 {
    font-family: Tahoma;
    color: red;
    font-size: 25;
  }
  
    h2 {
    font-family: Tahoma;
    color: red;
    font-size: 20;
  }
  
  
  p {
  align: justify;
      font-family: Arial;
    background-color: Hex={FF,CC,99};
    font-size: 16;
  }
  
  hr
    {

    color: green;

  }

</style>
</head>
<body style="background-color: #FFCC99">
<table border="0" width="100%">
	<tr>
		<td>
		<img border="0" src="../imagenes/encabezado.png" width="1151" height="126"></td>
	</tr>
	<tr>
		<td>
		<div class="navbar">
  <a href="../index.php">Catálogo</a>
  <a href="<?php echo $ruta; ?>php/premio.php">Premios</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction('1')">Colecciones
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="1">
  	<a href="<?php echo $ruta; ?>php/Libros.php">Libros</a>
    <a href="<?php echo $ruta; ?>php/Mangas.php">Mangas</a>
    <a href="<?php echo $ruta; ?>php/Ilustraciones.php">Ilustraciones</a>
      </div>
 </div>
	
  <div class="dropdown">	
    <button class="dropbtn" onclick="myFunction('2')">Autores
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="2">
  	<a href="<?php echo $ruta; ?>php/libro1.php">Curro Cañete</a>
    <a href="<?php echo $ruta; ?>php/libro 2.php">Sonsoles Onega</a>
    <a href="<?php echo $ruta; ?>php/libro 3.php">Paulo Coelho</a>
    <a href="<?php echo $ruta; ?>php/libro 4.php">Mónica Carrillo</a>
    <a href="<?php echo $ruta; ?>php/libro 5.php">Alice Kellen</a>
 
  </div>
 </div>
 
   <div class="dropdown"> 
      <button class="dropbtn" onclick="myFunction('3')">Clasificaciones
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="3">
  	<a href="<?php echo $ruta; ?>php/Terror.php">Terror</a>
    <a href="<?php echo $ruta; ?>php/Literatura juvenil.php">Literatura Juvenil</a>
    <a href="<?php echo $ruta; ?>php/Coaching y Superación personal.php">Coaching y superación personal</a>
 
  </div>
  </div> 
    <a href="<?php echo $ruta; ?>php/CUESTIONARIO.php">Contactenos</a>
</div>

		</td>
	</tr>