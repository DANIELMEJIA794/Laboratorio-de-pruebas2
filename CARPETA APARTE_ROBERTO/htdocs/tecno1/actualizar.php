<?php
include ("configuracion.php");
include ("encabezados/encabezado.php");

if (isset($_REQUEST["id"])) $id = $_REQUEST["id"]; 



 $sql = "select * from netflix WHERE id = '".$id."'";	
	


		echo '<p><table>';
			echo '<tr>';		
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
			echo '<td>';
			echo '<font face="arial" color="white">';	
			echo ' <h1>Modificar</h1>';
			echo '<form action="modificar.php" method="GET"  enctype="multipart/form-data" >';
			echo 'Pelicula: <input type="text" name="pelicula" value="'.$row["pelicula"].'"><br>';
			echo 'Resumen:<br> <textarea name="resumen" cols="80" rows="6">'.$row["resumen"].'</textarea><br>';
			echo '<input type="text" name="id" value="'.$row["id"].'">';
			echo '<p><input type="submit" value="Ingresar Datos" size=25>';
		    echo '</form>';
			echo '</font>';
	
			} 
  	}	
			echo '</tr>';
			echo '</table>';
	


include ("encabezados/piedepagina.php");
?>