<?php
include ("configuracion.php");
include ("encabezados/encabezado.php");

if (isset($_REQUEST["tipo"])) $tipo = $_REQUEST["tipo"]; 



 $sql = "select * from netflix WHERE tipo = '".$tipo."'";	
	


		echo '<p><table>';
			echo '<tr>';		
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
			echo '<td>';
			echo '<img src="'.$row["portada"].'" width="250">';
		    echo '<br>';	
			echo '<td>';			
			echo '<h2><font color="white" face="arial">'.$row["pelicula"].'</font></h2><br>';
		    echo '<font color="white" face="arial">'.$row["resumen"].'</font><br>';
	
			} 
  	}	
			echo '</tr>';
			echo '</table>';
	


include ("encabezados/piedepagina.php");
?>