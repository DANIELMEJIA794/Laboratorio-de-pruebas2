<?php
include ("configuracion.php");
include ("cabeza.php");

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
			echo '<img src="'.$row["portada"].'" width="250">';
		    echo '<br>';	
			echo '<td>';			
			echo '<h2><font color="white" face="arial">Película: '.$row["pelicula"].'</font></h2><br>';
		    echo '<font color="white" face="arial">Resumen: '.$row["resumen"].'</font><br>';
	
			} 
  	}	
			echo '</tr>';
			echo '</table>';
	


include ("pie.php");
?>