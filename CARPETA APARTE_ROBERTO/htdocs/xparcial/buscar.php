<?php
include ("configuracion.php");
include ("encabezados/encabezado.php");
verpalabra($palabra_buscada);

// --------------------------------------------------------------------


    $sql = "select * from libros where Autor Like '%".$palabra_buscada."%'  ";//Primero es el nombre de la tabla, luego el nombre de la característica
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
			echo '<img src="imagenes/'.$row["Portada"].'" width="250">';		
			echo '<strong>Autor:</strong>'.$row["Autor"].'<br>';
			echo '<br><strong>Alumno:</strong>'.$row["Alumno"];
			echo '<strong>Resumen:</strong>'.$row["Resumen"].'<br>';	
			echo '<hr>;
			} 
  	}	




include ("encabezados/piedepagina.php");
?>