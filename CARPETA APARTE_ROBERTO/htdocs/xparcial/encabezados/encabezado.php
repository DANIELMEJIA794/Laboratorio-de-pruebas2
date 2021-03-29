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

	<link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Tipo de Fuente -->
	<link rel="stylesheet" href="css/menu.css"> <!-- Tipo de Fuente -->
   <script type="text/javascript" src="javascript/menu.js"></script>
	<title> </title>
	</head>
	
	<body>
    
	<!-- aqui empieza el menu  -->
	<div class="navbar">
  <a href="index.htm">Catálogo</a>
  <a href="premio.htm">Premios</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction('1')">Colecciones
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="1">
    <a href="#">Literatura Infantil</a>
    <a href="#">Literatura Peruana</a>
    <a href="#">Literatura Internacional</a>
  </div>
 </div>
	
  <div class="dropdown">	
    <button class="dropbtn" onclick="myFunction('2')">Autores
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="2">
    <a href="http://unmsm.asterisk.education/filegator/repository/18030362/libro.htm">Curro Cañete</a>
    <a href="#">Link 4</a>
    <a href="#">Link 5</a>
  </div>
 </div>
 
   <div class="dropdown"> 
      <button class="dropbtn" onclick="myFunction('3')">Temas
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="3">
    <a href="#">Link 6</a>
    <a href="#">Link 7</a>
    <a href="#">Link 8</a>
  </div>
  </div> 
  
   <div class="dropdown"> 
      <button class="dropbtn" onclick="myFunction('4')">Menu Adicional
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="4">
    <a href="#">Link 9</a>
    <a href="#">Link 10</a>
    <a href="#">Link 11</a>
  </div>
  </div> 
  
    <a href="#news">Contactenos</a>
</div>
	<!-- aqui termina el menu  -->
	
<!-- AQUI APARECE EL ENCABEZADO -->
<img src="<?php echo $ruta_imagenes; ?>encabezado.png">
<form action="buscar.php" method="get">
<table bgcolor="silver" width="100%"<tr><td valign="middle">

<input type="text" size="20" name="termino">
<input type="submit" value=" Buscar en el catalogo ">

</td></tr>
</table>
</form>
