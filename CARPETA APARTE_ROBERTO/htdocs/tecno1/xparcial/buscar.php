<?php
include ("configuracion.php");
include ("encabezados/encabezado.php");


// --------------------------------------------------------------------

verpalabra($palabra_buscada);

// --------------------------------------------------------------------


    $sql = "select * from usuarios where apellidos Like '%".$palabra_buscada."%'  ";	
	
	echo '<table>';
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
			echo '<tr>';
			echo '<td><img src="'.$row["foto"].'" width="100"><td>';		
			echo '<td valign="top"><strong>Nombre:</strong>'.$row["nombres"].'<br>';
			echo '<td valign="top"><strong>Apellidos:</strong>'.$row["apellidos"].'<br>';
						
			echo '<strong>Resumen:</strong>'.$row["resumen"].'</td>';
			echo '<tr><td colspan="3"><hr>';
			} 
  	}	




include ("encabezados/piedepagina.php");
?>