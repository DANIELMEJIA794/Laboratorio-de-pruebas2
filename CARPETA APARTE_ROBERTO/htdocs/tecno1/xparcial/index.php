<?php
include ("configuracion.php");
include ("encabezados/encabezado.php");


 $sql = "select * from usuarios Order by id DESC Limit 0,5  ";	
	
	echo '<center>';
	echo '<table>';
	echo '<tr><td>';
		

		echo '<table>';
			echo '<tr>';		
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
			echo '<td>';
			echo '<img src="'.$row["foto"].'" width="250">';
		    echo '<br>';			
			echo $row["nombres"].$row["apellidos"].'<br>';
	
			} 
  	}	
			echo '</tr>';
			echo '</table>';
	
		echo '</tr>';
	echo '</table>';
	echo '</center>';
		

include ("encabezados/piedepagina.php");
?>