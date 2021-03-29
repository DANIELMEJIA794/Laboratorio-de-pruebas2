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

	<link rel="stylesheet" href="font-awesome.min.css"> <!-- Tipo de Fuente -->
	<link rel="stylesheet" href="menu.css"> <!-- Tipo de Fuente -->
   <script type="text/javascript" src="menu.js"></script>


	<title> </title>
	</head>
	
	<body bgcolor="black">
    
	<table cellpadding="0" cellspacing="0" width="100%">
	<tr><td width="150" align="top" valign="top">
	<img src="http://unmsm.asterisk.education/filegator/19030111/web/plantilla_parcial/netflix.png" width="200" height="50"></td>
	<td width="800">
	<!-- aqui empieza el menu  -->
	<div class="navbar">
  <a href="index.php">Inicio</a>
  <!-- MENU PELICULA -->
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction('1')">Peliculas
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="1">
    <a href="tipo.php?tipo=Pelicula&clasificacion=Terror">Terror</a>
    <a href="tipo.php?tipo=Pelicula&clasificacion=Ciencia Ficción">Ciencia Ficción</a>
    <a href="tipo.php?tipo=Pelicula&clasificacion=Romantica">Románticas</a>
  </div>
</div> 


  <!-- MENU SERIE -->
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction('2')">Serie
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="2">
    <a href="tipo.php?tipo=Serie&clasificacion=Terror">Terror</a>
    <a href="tipo.php?tipo=Serie&clasificacion=Ciencia Ficción">Ciencia Ficción</a>
    <a href="tipo.php?tipo=Serie&clasificacion=Romantica">Románticas</a>
  </div>
</div> 
   <a href="formulario.php">Ingresar</a>
  
</div>
	<!-- aqui termina el menu  -->
	<td>
<!-- AQUI APARECE EL ENCABEZADO -->

<form action="buscar.php" method="post">
<table  width="100%"<tr><td valign="middle">

<input type="text" size="20" name="termino">
<input type="submit" value=" Buscar ">

</td></tr>
</table>
</form>
</td></tr>
</table>