<?php 
include("encabezado.php");
include ("configuracion.php");
if(isset($_REQUEST["id"])) $id = $_REQUEST["id"];

$sql = "select * from c19030111 WHERE id = '".$id."'";

			echo '<p><table>';
			echo '<tr>';		
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
			echo '<td>';
			echo '<img src="'.$row["portada"].'" width="250">';
			echo '<font face="arial" color="white">';	
			echo ' <h1>Modificar</h1>';
			echo '<form action="modificar.php" method="GET" enctype="multipart/form-data">';
			echo 'Pelicula: <input type="text" name="pelicula" value="'.$row["pelicula"].'"><br>';
			echo 'Resumen:<br> <textarea name="resumen" cols="80" rows="6">'.$row["resumen"].'</textarea><br>';
			echo '<input type="hidden" name="id" value="'.$row["id"].'">';
			echo '<p><input type="submit" value="Ingresar Datos" size=25></p>';
		    echo '</form>';
			echo '</font>';
	
			} 
  	}	
			echo '</tr>';
			echo '</table>';
			
include ("pie.php");
?>