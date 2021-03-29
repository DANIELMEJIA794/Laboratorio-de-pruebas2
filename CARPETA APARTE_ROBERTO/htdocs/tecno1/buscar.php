<?php
include ("configuracion.php");
include ("encabezados/encabezado.php");


// --------------------------------------------------------------------

verpalabra($palabra_buscada);

// --------------------------------------------------------------------


    $sql = "select * from netflix 	where 
	pelicula Like '%".$palabra_buscada."%' 
	OR 
	resumen Like '%".$palabra_buscada."%'    ";	
	
	echo '<table>';
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
			echo '<tr>';
			echo '<td><img src="'.$row["portada"].'" width="300"><td>';		
			echo '<td valign="top"><h2><font color="white" face="arial"><strong>Película:</strong>'.$row["pelicula"].'</h2><br>';
							
			echo '<font color="white" face="arial"><strong>Resumen:</strong>'.$row["resumen"].'</td>';
			echo '<tr><td colspan="3"><hr>';
			} 
  	}	




include ("encabezados/piedepagina.php");
?>