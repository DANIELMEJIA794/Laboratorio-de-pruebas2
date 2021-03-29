<?php
include ("configuracion.php");
include ("cabeza.php");

echo '<table>';
echo '<tr><td>';
echo '<img src="http://unmsm.asterisk.education/filegator/19030111/web/batman.jpg">';
echo '</td></tr>';
echo '</table>';

echo '<img src="http://unmsm.asterisk.education/filegator/19030111/web/titseries.png">';


 $sql = "select * from netflix Order by pelicula DESC Limit 0,5  ";	
	
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
			echo '<a href="ver.php?id='.$row["id"].'">';
			echo '<img src="'.$row["portada"].'" width="250">';
			echo '</a>';
		    echo '<br>';			
			//echo $row["pelicula"].'<br>';
	
			} 
  	}	
			echo '</tr>';
			echo '</table>';
	
		echo '</tr>';
	echo '</table>';
	echo '</center>';
		

include ("pie.php");
?>