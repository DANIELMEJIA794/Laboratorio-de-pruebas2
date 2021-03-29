<?php
include ("configuracion.php");
session_start();

?>

<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
	    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 1000;
        margin: 30px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 1380;
	  height: 280;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
	td {
    margin: 0px;
    padding-top: 0px !important;
}
  </style>
  	<style>
		body{
			background-color: white;
				}
		.btn{
			border-radius: 3px;
			display: inline-block;
			padding: 11px 13px;
			text-decoration: none;
			text-shadow: 0 1px 0 rgba(255,255,255,0.3);
			box-shadow: 0 1px 1px rgba(0,0,0,0.3); 
		}

		.btn-green{
			color: white;
			background-color: #3CC93F;
		}
		.btn-green:hover{
			background-color: #37B839;	
		}
		.btn-green:active{
			background-color: #29962A;
		}

		.btn-red{
			color: white;
			background-color: #E34242;
		}
		.btn-red:hover{
			background-color: #C43535;	
		}
		.btn-red:active{
			background-color: #A62828;
		}
	</style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Crisol</title>
</head>
<body>
<div align="center">
<table  width="100%" height>
	<tr>
		<td width="862" height="91" background="fondo-gris.jpg"><a href="index.php"><img src="logo.jpg"></a></td>
		<div align="center">
		<td height="91" align="middle" background="fondo-gris.jpg">
		<?php
		echo '<br><font size="5">';
		echo '<b>¡Bienvenido!</b><br>';
		echo  $_SESSION["nombre"].'&nbsp;';
		echo  $_SESSION["apellido"].'<br>';
		echo '</font>';
		?>
		<form method="POST" action="buscar.php">
			<p><input type="text" name="termino" size="50"><input type="submit" value="Buscar"></p>
		</form>
		</td>
		</div>
	</tr>
				<tr bgcolor="#E34242">
		<td height="0">
		<div id="main-container">
				&nbsp;&nbsp;<a href="literatura.php?categoria=literatura" class="btn btn-red"><b>LITERATURA</b></a>&nbsp;&nbsp;
				<a href="literatura.php?categoria=historia" class="btn btn-red"><b>HISTORIA</b></a>&nbsp;&nbsp;
				<a href="literatura.php?categoria=deportes" class="btn btn-red"><b>DEPORTES</b></a>&nbsp;&nbsp;
				<a href="literatura.php?categoria=infantil" class="btn btn-red"><b>INFANTIL</b></a>&nbsp;&nbsp;
				</div></td>
				<td border="0">
				<div id="main-container">
				<a href="cerrar.php" class="btn btn-red"><b>CERRAR SESIÓN</b></a>&nbsp;&nbsp;
				<?php  
				if($_SESSION["rol_de_usuario"]=='admin'){
				?>
				<a href="reportes.php" class="btn btn-red"><b>REPORTES</b></a>&nbsp;&nbsp;
				<a href="formulario.php" class="btn btn-red"><b>FORMULARIO</b></a>&nbsp;&nbsp;
				</div>
				<?php
}
				?>
				</td>
			</tr>
		</table>
		</div>