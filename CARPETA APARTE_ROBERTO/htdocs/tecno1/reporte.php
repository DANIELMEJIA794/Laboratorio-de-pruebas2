<?php
include ("configuracion.php");
include ("encabezados/encabezado.php");


// --------------------------------------------------------------------

    echo '<h1><font color="white" face="arial">Palabra buscada</font></h1>';

// --------------------------------------------------------------------


    $sql = "select * from netflix  ";	
	
	echo '<table>';
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
			echo '<tr>';
			echo '<td><img src="'.$row["portada"].'" width="300"><td>';		
			echo '<td valign="top"><h2><font color="white" face="arial"><strong>Película:</strong>'.$row["pelicula"].'</h2><br>';
							
			echo '<a href="borrar.php?id='.$row["id"].'"><img src="borrar.png" width="50" height="50"></a>';
			echo '&nbsp;<a href="actualizar.php?id='.$row["id"].'"><img src="actualizar.png"  width="50" height="50"></a>';
					
			
			
			echo '</td>';
			echo '<tr><td colspan="3"><hr>';
			} 
  	}	




include ("encabezados/piedepagina.php");
?>